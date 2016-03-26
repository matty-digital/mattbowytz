<!DOCTYPE html>
<html>
  <head>
    <title>Select Your Favorite CD</title>

    <link rel="stylesheet" type="text/css" href="CDstyle.css">
  </head>

  <body> 
    <div class="center">

      <script type="text/javascript">
        alert("Now loading the survey");
      </script>
      
      <table id="theTable" border="1" class="thetable">
      </table>

      <br />

      <div class="center">
        <h1>Write-in choice</h1>
        <div>
          Title: <input type="text" name="title" value=""><br/>
          Artist: <input type="text" name="artist" value=""><br/>
          <input type='button' value="Enter" onclick='refreshData(2);'>
          <input type="reset" name="Reset">
        </div>
      </div>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script type="text/javascript">

        var theCDs = [], CDcount = 0, t;

        // This has the same functionality as CDpoll-sortxml.php, but now
        // using JQuery. 

        // Note how very different this code looks compared to previous versions.
        // This is because JQuery changes / simplifies a lot of things about how
        // the logic is performed.  I also rearranged some of the sections to make
        // it a bit more streamlined.  Overall, this version is significantly
        // shorter than the straight Javascript / DOM version.

        // Initially refresh the table 
        $(document).on('ready', function() {
          //alert("About to call server");
          refreshData(3);
        });

        // This refreshData function will handle both the refresh and the
        // add new CD options. This is a mix of straight Javascript and
        // JQuery calls
        function refreshData(sendType) {
          var r = CDcount;
          var args;
          var title;
          var artist;
          
          // For type 2, we want to add a new CD, so check the values of
          // the input textboxes.  If either is empty, return without
          // processing.
          if (sendType == 2) {
            var ok = true;
            title = $("input[name=title]").val();
            artist = $("input[name=artist]").val();
          }
          
          if (title == "") {
            alert("Please enter a title for your write-in vote");
            $("input[name=title]").focus();
            ok = false;
          }
            
          if (artist == "") {
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

        // Generate the argument list based on the type of the request.  Note
        // the syntax here -- we are creating a javascript object literal out
        // of the arguments since this is needed for the .post() function.
        if (sendType == 2) {
          args = {"type":sendType, "rows":CDcount, "title":title, "artist":artist};
        } else {
          args = {"type":sendType, "rows":CDcount};
        }

        // Make an AJAX request, passing the server url, the argument list and 
        // the callback function as parameters.  post is actually a restricted
        // version of the more general ajax() JQuery request. 
        // For more information on post, see:
        // http://api.jquery.com/jQuery.post/
        $.post("tabulate-xml.php", args, function(data) {
          // The return data from the request is passed implicitly
          // to this call back function.
          // JQuery uses its "best guess" to decide that the data is XML.
          // Thus, we can parse it using the same JQuery selectors
          // (more or less) that we use for our html document.  We use
          // the text() function to get the contents of an XML tag.
          
          var rettype = $(data).find("Type").text();

          // If we are adding a row and the return is just an Ack,
          // we add the new CD to our CD list.  
          if (sendType == 2 && rettype == "Ack") {
            addRowToList(null, title, artist, '1');
          } else if (sendType == 3 && rettype == "Ack") {
          
            // If we are refreshing and the return is just an Ack,
            // we do nothing.
            window.status = "";
            return;
          } else {
          // Parse the XML to extract the CDs.  First we find()
          // CD to get all of the tags that match (i.e. the new
          // rows).  We then extract the individual fields from
          // each row. We then add the CDs to our array, as we
          // did in the previous version. 
          var newRows = $(data).find("CD");

          for (var i = 0; i < newRows.length; i++) {
            var theRow    = newRows[i];
            var newid     = $(theRow).find("id").text();
            var newtitle  = $(theRow).find("Title").text();
            var newartist = $(theRow).find("Artist").text();
            var newvotes  = $(theRow).find("Votes").text();
            addRowToList(newid, newtitle, newartist, newvotes);
          } 

          if (sendType == "2") {
            addRowToList(null, title, artist, '1');
          }
          }

          // Rebuild the table from the list
          showCDTable();
          window.status = "Table updated at " + (new Date()).toString();
        });

        // Reset timer for next refresh
        if (sendType == 3) {
          t = setTimeout("refreshData(3)", 60000);
        }
      }

      function CD(id, title, artist, votes) {
        this.id     = id;
        this.title  = title;
        this.artist = artist;
        this.votes  = votes;
      }

      function by_name(a, b) {
        if (a.title < b.title) {
          return -1;
        } else if (a.title == b.title) {
          return 0;
        } else {
          return 1;
        }
      }

      function addRowToList(id, title, artist, votes) {
        var currCD;
        
        if (id == null) {
          currCD = new CD(CDcount+1, title, artist, votes);
        } else {
          currCD = new CD(id, title, artist, votes);
          theCDs[CDcount] = currCD;
          CDcount++;
        }
      }

      // Sort the CDs then generate a new table, replacing the old one with
      // the new.  This is very different from how we did it with simple
      // Javascript and DOM
      function showCDTable() {
        theCDs.sort(by_name);

        // Create table with appropriate caption and column labels
        var newTable = "<table id='theTable' className='theTable'>";
        newTable += "<caption class='title'>Select Your Favorite CD</caption>";
        newTable += "<tr align='center'><td>Title</td><td>Artist</td><td>Count</td><td>Select</td></tr>";
        newTable += "</table>";

        // Replace old table with new one
        $("#theTable").replaceWith(newTable);

        // Append a new row in the table for each entry in the CD array.  Note
        // that at this point there is nothing in the rows.  We will use the
        // each() iterator to add that data below.
        for (var i = 0; i < CDcount; i++) {
          $("#theTable").append("<tr align='center' class='regular'></tr>");
        }

        // Iterate through the table rows, creating the data values for each
        // CD in the corresponding rows.  Also add the appropriate event
        // handlers.
        $("#theTable tr").each(function(ind, el) {
          if (ind > 0) {
            var $self = $(this);
            // Skip initial row with labels
            var cdi = ind - 1; // Row in CD array is one less than table row
            //alert(theCDs[cdi].title + " " + theCDs[cdi].artist + " " + theCDs[cdi].votes);
            var rowData = "<td>" + theCDs[cdi].title + "</td>";
            rowData += "<td>" + theCDs[cdi].artist + "</td>";
            rowData += "<td>" + theCDs[cdi].votes + "</td>";
            rowData += "<td><input type='radio' name='options' value='" + theCDs[cdi].id+"'></td>"; 
            
            $self.append(rowData); 

            // The click() function requires an AJAX call to update the
            // count for that CD.  This is done with another post call
            // where the return function will replace the data in the
            // appropriate cell with the new count value.  Note how simple
            // this is -- the AJAX call and the response to the callback are
            // all done in just a couple of lines.
            $self.find("input").on('click', function() {
              // Update the count in a row using XML
              $.post('tabulate-xml.php', { "type": 1, "select": theCDs[cdi].id }, function(data) {
                
                // For this callback we again parse the XML
                // Get the count returned from the server, then change
                // the appropriate location in the table.
                var newCount = $(data).find("Count").text();
                $(el).find("td:eq(2)").replaceWith("<td>" + newCount + "</td>");
              });
            });

            // Assign the "mouseover" style changes to the table locations
            $self.find("input").on('hover', function() {
              $("#theTable tr:eq("+ind+")").removeClass("regular");
              $("#theTable tr:eq("+ind+")").addClass("highlight");
            }, function() {
              $("#theTable tr:eq("+ind+")").removeClass("highlight");
              $("#theTable tr:eq("+ind+")").addClass("regular");
            });
          }
        });
      }
    </script>
  </body>

</html>
