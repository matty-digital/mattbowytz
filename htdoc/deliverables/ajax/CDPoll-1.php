<!DOCTYPE html>
<html>
  <head>
  <title>Select Your Favorite CD</title>
    
  <script type="text/javascript">
  // file is for demonstration and reference purposes only
    function processData() {
      var httpRequest;
 
      var type = arguments[0];

      if (window.XMLHttpRequest) {
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
        var rows = arguments[1];
        var title = arguments[2];
        var artist = arguments[3];
        data = 'type=' + type + '&rows=' + rows + '&title=' + title + '&artist=' + artist; 
        //alert(data);
      }

      httpRequest.open('POST', 'tabulate-update.php', true);
      httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      if (type == 1) {
        httpRequest.onreadystatechange = function() { showResults(httpRequest, choice); };
      } else {
        httpRequest.onreadystatechange = function() { addNewRows(httpRequest, title, artist); };
      }
      httpRequest.send(data);
    }

    function processWritein() {
      var numrows = document.getElementById("theTable").rows.length-1;
      var title = document.pollForm.title.value;
      var artist = document.pollForm.artist.value;
      var ok = true;
      if (title == "") {
        alert("Please enter a title for your write-in vote");
        document.pollForm.title.focus();
        ok = false;
      }
      if (artist == "") {
        alert("Please enter an artist for your write-in vote");
        document.pollForm.artist.focus();
        ok = false;
      }
      // If the request is ok, and there is no other request pending,
      // process it and send the AJAX request.  Otherwise, tell the user
      // to try again.
      if (ok && !pending) {
        pending = true;
        document.pollForm.artist.value = "";
        document.pollForm.title.value = "";
        processData(2, numrows, title, artist);
      } else if (ok) {
        alert("Previous update processing...please try again");
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

    // Add 1 or more rows to the table (based on the responseText
    // string).  
    function addNewRows(httpRequest, title, artist) {
      if (httpRequest.readyState == 4) {
        if (httpRequest.status == 200) {
          var ack = httpRequest.responseText;
          //alert(ack);
          if (ack == "OK") {
            addRow(title, artist, '1');
          } else {
            var newRows = ack.split("^");
            for (var i = 0; i < newRows.length; i++) {
              var theRow = newRows[i].split("|");
              addRow(theRow[1], theRow[2], theRow[3]);
            }
              addRow(title, artist, '1');
             }
           } else {   
            alert('Problem with request'); 
           }
        // Process has completed so reset the pending variable to allow
        // another update to occur
        pending = false;
      }
    }

    function updateRows(httpRequest) {
      if (httpRequest.readyState == 4) {
        if (httpRequest.status == 200) {
          var ack = httpRequest.responseText;
          if (ack != "") {
            var newRows = ack.split("^");
            for (var i = 0; i < newRows.length; i++) {
              var theRow = newRows[i].split("|");
              addRow(theRow[1], theRow[2], theRow[3]);
            }
            window.status="Table updated at " + (new Date()).toString();
          } else {
            window.status="";
          }
        } else {   
        alert('Problem with request'); 
      }
      // Process has completed so reset the pending variable to allow another
      // update to occur
      pending = false;
      }
    }

    function addRow(title, artist, vote) {
      var T = document.getElementById("theTable");
      var len = T.rows.length;
      var R = T.insertRow(len); 
      R.align = 'center';       
      R.className = 'regular';

      var C = R.insertCell(0);  
      var txt = document.createTextNode(title);
      C.appendChild(txt);
      C = R.insertCell(1);
      txt = document.createTextNode(artist);
      C.appendChild(txt);
      C = R.insertCell(2);
      txt = document.createTextNode(vote);
      C.appendChild(txt);

      C = R.insertCell(3);     
      var rb = document.createElement('input');
      rb.setAttribute('type', 'radio');
      rb.setAttribute('name', 'options');
      rb.setAttribute('value', len);
      rb.onclick = function() { processData(1, len); };
      // For new rows we must also add the style events
      rb.onmouseover = function() { showSelected(len); };
      rb.onmouseout = function() { makeRegular(len); };
      C.appendChild(rb);
    }

    // Change the style of the row that is selected to highlight it
    function showSelected() {
      var rowind = arguments[0];
      var theTable = document.getElementById("theTable");
      var theRow = theTable.rows[rowind];
      theRow.className = "highlight";
    }

    // Change the style back to the regular style for the row
    function makeRegular() {
      var rowind = arguments[0];
      var theTable = document.getElementById("theTable");
      var theRow = theTable.rows[rowind];
      theRow.className = "regular";
    }

    function startRefresh() {
      t = setTimeout("refreshPage()", 60000);
    } 

    function refreshPage() {
      if (!pending) {
        pending = true;
        var httpRequest;

        if (window.XMLHttpRequest) {
          httpRequest = new XMLHttpRequest();
          if (httpRequest.overrideMimeType) {
            httpRequest.overrideMimeType('text/xml');
          }
        }
        if (!httpRequest) {
          alert('Giving up :( Cannot create an XMLHttpRequest instance');
          return false;
        }

        var type = 3; 
        var rows = document.getElementById("theTable").rows.length-1;;
        var data = 'type=' + type + '&rows=' + rows;

        httpRequest.open('POST', 'tabulate-update.php', true);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        httpRequest.onreadystatechange = function() { updateRows(httpRequest); } ;
        httpRequest.send(data);   
      }
      t = setTimeout("refreshPage()", 60000);
    }
  </script>
  </head>
  
  <body onload="startRefresh()">
    <center>
      <script type="text/javascript">
        alert("Now loading the survey");
      </script>
      <form name="pollForm">
        <table id="theTable" border="1" class="thetable">
          <caption class="title">Select your Favorite CD</br></caption>
          <tr align='center'>
            <th>Title</th><th>Artist</th><th>Count</th><th>Select</th>
          </tr>
        <?php
          $passlist = file("password.php");
          $passwd = rtrim($passlist[1]);
          $passwd = preg_replace('/#/','',$passwd);
          $db = new mysqli('localhost', 'name', "$passwd", 'name');
          if ($db->connect_error):
            die ("Could not connect to db " . $db->connect_error);
          endif;
          $result = $db->query("select id, Title, Artist, Votes from CDs");
          $rows = $result->num_rows;
          for ($ctr = 1; $ctr <= $rows; $ctr++):
            echo "<tr align = 'center' class = 'regular'>";
            $row = $result->fetch_array();
            $id = $row["id"];
            $title = $row["Title"];
            $artist = $row["Artist"];
            $votes = $row["Votes"];
            echo "<td>$title</td>";
            echo "<td>$artist</td>";
            echo "<td>$votes</td>";
            // Note the two additional events handled by the radiobutton.
            // These change the style to a highlighted style and then back.
            echo "<td><input type='radio' name='options' value='$id' onclick='processData(1, $id)' onmouseover='showSelected($id)' onmouseout='makeRegular($id)'</td>";
            echo "</tr>";
          endfor;
        ?>
        </table>
        <br />
        <center>
          <b>Write-in choice</b>
          <br />
          Title: <input type="text" name="title" value="">
          <br />
          Artist: <input type="text" name="artist" value="">
          <br />
          <input type='button' value="Enter" onclick='processWritein()'>
          <input type="reset" name="Reset">
          <br />
          <br />
        </center>
      </form>
    </center>
    <script type="text/javascript">
      var win, t, pending;
      pending = false;
    </script>
  </body>
</html>
