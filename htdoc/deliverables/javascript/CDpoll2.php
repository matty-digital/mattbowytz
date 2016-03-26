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

      <form name="pollForm">
        <table id="theTable" border="1">
        <caption><b>Select your Favorite CD</b></caption>
        <tr align="center">
          <th>Title</th><th>Artist</th><th>Count</th><th>Select</th>
        </tr>

        <?php
          # You should know how to connect to a db with mysqli by now, so put your creds in here
          $db = new mysqli('localhost', "$user", "$passwd", "$user");
          
          if ($db->connect_error):
            die ("Could not connect to db " . $db->connect_error);
          endif;

          $result = $db->query("select id, Title, Artist, Votes from CDs");
          $rows   = $result->num_rows;
          for ($ctr = 1; $ctr <= $rows; $ctr++):
            echo "<tr align = 'center'>";
            $row    = $result->fetch_array();
            $id     = $row["id"];
            $title  = $row["Title"];
            $artist = $row["Artist"];
            $votes  = $row["Votes"];
          
            echo "<td>$title</td>";
            echo "<td>$artist</td>";
            echo "<td>$votes</td>";
            echo "<td><input type='radio' name='options' value='$id' onclick='processData(1, $id);'></td>";
            echo "</tr>";
          endfor;
        ?>
        </table>
        <br />

        <b>Write-in choice</b>
        <br />
    
        <div class="center">
          Title: <input type="text" name="title" value=""><br />
          Artist: <input type="text" name="artist" value=""><br />
          <input type='button' value="Enter" onclick='processWritein();'>
          <br />
          <br />
          <input type="reset" name="Reset">
        </div>
      </form>
    </div>
    
    <script type="text/javascript">
      // (Most of the original comments have been removed -- see below for more
      // new comments)
      // This program now attempts to keep the client consistent with the server
      // as a person runs the CD poll (see also tabulate2.php).  The idea is
      // this:
      //     Along with the submission of a new choice for the poll, the client
      //     also submits the number of choices in the table.  The server (see
      //     tabulate2.php) then checks to see if the number of choices is the
      //     same as the number of entries in the DB.  If not, the server sends
      //     back the new data from the DB and the client then appends it to the
      //     table.
      //     Note:  This script does NOT check to make sure the counts for the
      //     CDs are consistent between the client and the server.  However, when
      //     a CD is chosen its updated count is always returned, so it again
      //     becomes consistent.
      function processData() {
        var httpRequest;

        var type = arguments[0];  // get type of call

        if (window.XMLHttpRequest) { // Mozilla, Safari, ...
          httpRequest = new XMLHttpRequest();
          if (httpRequest.overrideMimeType) {
            httpRequest.overrideMimeType('text/xml');
          }
        }

        if (!httpRequest) {
          alert('Giving up :( Cannot create an XMLHttpRequest instance');
          return false;
        }

        var data;
        if (type == 1) {
          var choice = arguments[1];
          data = 'type=' + type + '&' + 'select=' + choice;  
          //alert(data);
        } else {
          // type == 2
          // additional argument of the rows is also sent to the server
          var rows   = arguments[1];
          var title  = arguments[2];
          var artist = arguments[3];
          data = 'type=' + type + '&rows=' + rows + '&title=' + title + '&artist=' + artist; 
          //alert(data);
        }

        httpRequest.open('POST', 'tabulate2.php', true);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        if (type == 1) {
          httpRequest.onreadystatechange = function() { showResults(httpRequest, choice); };          
        } else {
          // Now we call a function that can add multiple rows, instead of just
          // one row.
          httpRequest.onreadystatechange = function() { addNewRows(httpRequest, title, artist); };
        }

        httpRequest.send(data);
      }

      // Same as in CDpoll.php, except that numrows is passed as an additional
      // argument.
      function processWritein() {
        var numrows = document.getElementById("theTable").rows.length-1;
        var title   = document.pollForm.title.value;
        var artist  = document.pollForm.artist.value;

        if (title == "") {
          document.pollForm.title.focus();
          return false;
        } else if (artist == "") {
          document.pollForm.artist.focus();
          return false;
        } else {
          document.pollForm.artist.value = "";
          document.pollForm.title.value  = "";
          processData(2, numrows, title, artist);
        }
      }

      function showResults(httpRequest, choice) {
        if (httpRequest.readyState == 4) {
          if (httpRequest.status == 200) {
            var newCount = httpRequest.responseText;

            var T = document.getElementById("theTable");
            var R = T.rows[choice];
            var C = R.cells;
            var oldChild = C[2].childNodes[0];
            var txt = document.createTextNode(newCount);
            C[2].replaceChild(txt, oldChild);
            //C[2].innerHTML = newCount;
          } else {
            alert('Problem with request'); 
          }
        }
      }

      // Add 1 or more rows to the table (based on the responsText
      // string).  
      function addNewRows(httpRequest, title, artist) {
        if (httpRequest.readyState == 4) {
          if (httpRequest.status == 200) {
            var ack = httpRequest.responseText;
            //alert(ack);
            // OK means that no other client has added any rows since
            // the last time this cliet updated the table.
            if (ack == "OK") {
              addRow(title, artist, '1');
            } else {
              // Now new rows must be added to the table.
              var newRows = ack.split("^");
              
              for (var i = 0; i < newRows.length; i++) {
                var theRow = newRows[i].split("|");
                addRow(theRow[1], theRow[2], theRow[3]);
              }
            addRow(title, artist, '1');
          }
        } else {
          alert('Problem with request'); }
        }
      }

      // The code in this function was just cut / pasted from the addRow
      // function in the orginal CDpoll.php.  I made it into a function since
      // we may need to use it more than once.
      function addRow(title, artist, vote) {
        var T   = document.getElementById("theTable");
        var len = T.rows.length;
        var R   = T.insertRow(len); 
        R.align = 'center';       

        var C   = R.insertCell(0);  
        var txt = document.createTextNode(title);
        C.appendChild(txt);
        C       = R.insertCell(1);
        txt     = document.createTextNode(artist);
        C.appendChild(txt);
        C       = R.insertCell(2);
        txt     = document.createTextNode(vote);
        C.appendChild(txt);

        C       = R.insertCell(3);     
        var rb  = document.createElement('input');
        rb.setAttribute('type', 'radio');
        rb.setAttribute('name', 'options');
        rb.setAttribute('value', len);
        rb.onclick = function() { processData(1, len); };
        C.appendChild(rb);
      }
    </script>
  </body>
</html>
