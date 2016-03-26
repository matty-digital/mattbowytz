<!DOCTYPE html>
<html>
  <head>
    <title>Select Your Favorite CD</title>
    
    <link rel="stylesheet" type="text/css" href="CDstyle.css">    
  </head>

  <body> 
    <script>
      alert("Now loading the survey");
    </script>

    <table id="theTable" border="1" class="thetable">
    </table>
    
    <br />
    
    <div class="center">
      <h1>Write-in choice</h1>
      <div>
        Title: <input type="text" name="title" value=""><br />
        Artist: <input type="text" name="artist" value=""><br />
        <input type='button' value="Enter" onclick='refreshData(2);'>
        <input type="reset" name="Reset">
      </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>

      var theCDs = [], CDcount = 0, t;

      // We need some extra global variables now.  The comparators array is
      // storing the field names of the CD object -- this will determine how the
      // CD array will be sorted.  The cur_comp variable is the current field
      // that will be used for the table. It is updated when the user clicks on
      // each of the column headers.
      var comparators = ["title", "artist", "votes"];
      var cur_comp = comparators[0];

      // A script this long should probably go into its own file, but for visibility, here it is
      // See comments below.
      // Initially refresh the table 

      $(document).on("ready", function() {
        //alert("About to call server");
        refreshData(3);
      });

      function refreshData(sendType) {
        var r = CDcount;
        var args;
        var title;
        var artist;

        if (sendType === 2) {
          var ok = true;
          title = $("input[name=title]").val();
          artist = $("input[name=artist]").val();
          
          if (title === "") {
            alert("Please enter a title for your write-in vote");
            $("input[name=title]").focus();
            ok = false;
          }
          
          if (artist === "") {
            alert("Please enter an artist for your write-in vote");
            $("input[name=artist]").focus();
            ok = false;
          }
           
          if (!ok) {
            return;
          } else {
            $("input[name=title]").val("");
            $("input[name=artist]").val("");
          }
        }

        if (sendType === 2) {
          args = {
            "type"  :sendType, 
            "rows"  :CDcount, 
            "title" :title, 
            "artist":artist
          }; 
        } else {
          args = {
            "type":sendType, 
            "rows":CDcount
          }; 
        }
       
        $.post("tabulate-json.php", args, function(data) {
          var rettype = data.Type;
          if (sendType === 2 && rettype === "Ack") {
            addRowToList(null, title, artist, '1');
          } else if (sendType == 3 && rettype == "Ack") {
            window.status = "";
            return;
          } else {
            var newRows = data.Contents;
            for (var i = 0; i < newRows.length; i++) {
              var theRow = newRows[i];
              addRowToList(theRow.id, theRow.Title, theRow.Artist, theRow.Votes);
            }
            if (sendType === "2") {
              addRowToList(null, title, artist, '1');
            }
          }
          showCDTable();
          window.status = "Table updated at " + (new Date()).toString();
        });

        if (sendType === 3) {
          t = setTimeout("refreshData(3)", 60000);
        }
      }

      // Create a CD
      function CD(id, title, artist, votes) {
        this.id     = id;
        this.title  = title;
        this.artist = artist;
        this.votes  = votes;
      }

      function addRowToList(id, title, artist, votes) {
        var currCD;
        if (id === null) {
          currCD = new CD(CDcount + 1, title, artist, votes);
        } else {
          currCD = new CD(id, title, artist, votes);
        }
        theCDs[CDcount] = currCD;
        CDcount++;
      }

      // Generate a new table, sorting the data using the current sorting
      // method.  Note the logic below -- Javascript will sort in alphabetical
      // order by default.  In order to sort the Count field numerically, we
      // need to calculate the comparison function differently than for the other
      // two fields.  However, in order to know this difference in a general
      // way, we need to test to see if the data is numeric.  This can be done
      // with a JQuery function.  Note also that we are using the CD object as
      // a keyed array here -- this access comes in very handy in this
      // situation.
      function showCDTable() {
        theCDs.sort(function (a,b) {
          if ($.isNumeric(a[cur_comp])) {
            return a[cur_comp] - b[cur_comp];
          } else {
            if (a[cur_comp] < b[cur_comp]) {
              return -1;
            } else if (a[cur_comp] == b[cur_comp]) {
              return 0;
            } else {
              return 1;
            }
          }
        });
        // Create table with appropriate caption and column labels
        var newTable = "<table id='theTable' className='theTable'>";
        newTable += "<caption class='title'>Select Your Favorite CD</caption>";
        newTable += "<tr align='center'><td>Title</td><td>Artist</td><td>Count</td><td>Select</td></tr>";
        newTable += "</table>";
        // Replace old table with new one
        $("#theTable").replaceWith(newTable);

        // Process td's 0, 1 and 2 of row 0 (i.e. the header row) to do the
        // following:
        // 1) Highlight and add "Sort" on mouseover and change back to normal
        //    on mouseout
        // 2) Select the correct comparator field on click and redraw the
        //    table.  The comparator field is just the name of the field,
        //    stored in an array that is parallel to the table columns.
        $("#theTable tr:eq(0) td:lt(3)").each(function(ind, el) {
          var self = $(this);
          self.hover(function() {
            self.addClass("highlight");
            self.prepend("Sort ");
          }, function() {
            self.removeClass("highlight");
            var txt = self.text();
            txt = txt.replace("Sort ","");
            self.text(txt);
          });

          self.click(function() {
            cur_comp = comparators[ind];
            showCDTable();
          });
        });   
         
        for (var i = 0; i < CDcount; i++) {
          $("#theTable").append("<tr align='center' class='regular'></tr>");
        }

        $("#theTable tr").each(function(ind, el) {
          // Skip initial row with labels
          if (ind > 0) {
            var $self = $(this);
            var cdi = ind-1;  // Row in CD array is one less than table row
            //alert(theCDs[cdi].title + " " + theCDs[cdi].artist + " " + theCDs[cdi].votes);
            var rowData = "<td>" + theCDs[cdi].title + "</td>";
            rowData += "<td>" + theCDs[cdi].artist + "</td>";
            rowData += "<td>" + theCDs[cdi].votes + "</td>";
            rowData += "<td><input type='radio' name='options' value='" + theCDs[cdi].id + "'></td>"; 
            $self.append(rowData); 
                 
            $self.find("input").click(function() {
              $.post('tabulate-json.php', {
                  type: 1, 
                  select: theCDs[cdi].id 
                }, function(data) {
                // For sorting by votes, we now have to consider the following
                // situation: How do we handle the order when the vote totals change?
                // One option is to just keep as is with the new vote total (so the
                // data may no longer be sorted).  Another option, shown below, is to
                // check for the current order and re-draw the table when the order is
                // by votes.  Note also that we need to store the updated vote count
                // back in the theCDs array so it is shown correctly (this was not done
                // in previous versions).
                var newCount = data.Contents;
                theCDs[cdi].votes = newCount;
                $(el).find("td:eq(2)").replaceWith("<td>" + newCount + "</td>");
                if (cur_comp == "votes") {
                  showCDTable();
                }
              });                
            });
            
            $self.find("input").hover(function() {
              $("#theTable tr:eq(" + ind + ")").removeClass("regular");
              $("#theTable tr:eq(" + ind + ")").addClass("highlight");
            }, function() {
              $("#theTable tr:eq(" + ind + ")").removeClass("highlight");
              $("#theTable tr:eq(" + ind + ")").addClass("regular");
            });
          }
        });
      }
    </script>
  </body>

</html>
