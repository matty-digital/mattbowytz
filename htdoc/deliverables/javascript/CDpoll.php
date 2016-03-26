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
        // Note in the form below there is are not "action" or "method"
        // attributes.  This is because in fact we never actually submit
        // the form.  All submissions are done asynchronously via AJAX
      </script>

      <form name="pollForm">
        <table id="theTable" border="1">
          <caption><b>Select your Favorite CD</b></caption>
          <tr align="center">
            <th>Title</th><th>Artist</th><th>Count</th><th>Select</th>
          </tr>

          <?php
            // Initialize the table from the database on the server.  Note that this
            // is done when the file is requested but subsequent updates are done
            // via AJAX requests.

            # You should know how to connect to a db with mysqli by now, so put your creds in here
            $db = new mysqli('localhost', "$user", "$passwd", "$user");

            if ($db->connect_error):
              die ("Could not connect to db " . $db->connect_error);
            endif;

            $result = $db->query("select id, Title, Artist, Votes from CDs");
            $rows = $result->num_rows;

            for ($ctr = 1; $ctr <= $rows; $ctr++):
              echo "<tr align='center'>";
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

        <div class="center">
          <b>Write-in choice</b>          
          <br />
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
      // This is a fairly simple example of using AJAX (Asynchronous JavaScript
      // and XML) and DOM techniques to enable a Web page to be updated without
      // requiring a complete refresh.  See additional comments below.

      // The basic AJAX framework was taken from the handout that I gave to you
      // in class.  See: http://developer.mozilla.org/en/docs/AJAX
      function processData() {
      var httpRequest;

      var type = arguments[0];  // get type of call

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

      // Set data to submit to server, based on the type of the action
      var data;
      if (type == 1) {
        var choice = arguments[1];
        data = 'type=' + type + '&' + 'select=' + choice;  
        //alert(data);
      } else {
        // type == 2
        var title = arguments[1];
        var artist = arguments[2];
        data = 'type=' + type + '&title=' + title + '&artist=' + artist; 
        //alert(data);
      }

      // I have used POST here because GET requests may be cached.  For more 
      // details about this problem, see:
      // http://www.w3schools.com/ajax/ajax_xmlhttprequest_send.asp
      // Note that for POST, the Content-Type must be set accordingly
      httpRequest.open('POST', 'tabulate.php', true);
      httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      // Set the "callback function" to respond to the reply that will come
      // back from the request.  Since I am passing an argument to the
      // function that is doing the actual work, I cannot use that as the
      // callback (the function must not have any parameters).  Thus, it is
      // placed within an anonymous, parameterless function.  The
      // function will actually be called each time the state of the request
      // changes.  However, note that we only process the result when the
      // readyState = 4, which means that the result has been loaded.
      if (type == 1) {
        httpRequest.onreadystatechange = function() { showResults(httpRequest, choice); };        
      } else {
        httpRequest.onreadystatechange = function() { addRow(httpRequest, title, artist); } ;  
      }

    httpRequest.send(data);
  }

  // Function to process the write in choice
  function processWritein() {
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

    if (ok) {
      document.pollForm.artist.value = "";
      document.pollForm.title.value = "";
      processData(2, title, artist);
    }
  }

  // Obtain the result from the server, which is simply an integer, and
  // update the correct cell in the table to the new value.  To do this
  // dynamically, I am using DOM techniques.  See more details below.
  function showResults(httpRequest, choice) {
    if (httpRequest.readyState == 4) {
      if (httpRequest.status == 200) {
        //alert('About to update count');
        var newCount = httpRequest.responseText;

        // Get the table, then the row, and then the cell that needs
        // to be updated.  Finally, update the cell using DOM.
        // Note: We can also update the cell the "old way" using
        // the innerHTML property.  For more info on innerHTML, see:
        // http://developer.mozilla.org/en/docs/DOM/element.innerHTML
        // (note that, although convenient, innerHTML is DOM 0 -- not
        // part of the actual DOM standards 1, 2 or 3)
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

  // In this case, I am dynamically adding to the table.  This is a bit
  // more complicated than just altering the table, but it is definitely
  // cool!  Note that the server is still sending only a very simple
  // reply -- this is because we know what was sent and all the server
  // is doing is adding the data to the DB and responding "OK".
  function addRow(httpRequest, title, artist) {
    if (httpRequest.readyState == 4) {
      if (httpRequest.status == 200) {
        alert('About to add new row');
        var ack = httpRequest.responseText;
        
        if (ack == "OK") {
        // Now we need to add a new row to the table.  There
        // are various ways of doing this, and not all ways work
        // in all browsers (esp. older IE versions).  However, the
        // code below should work in IE 7+ 
        var T = document.getElementById("theTable");
        var len = T.rows.length;
        var R = T.insertRow(len); // add new row at end of table
        R.align = 'center';       // center it

        var C = R.insertCell(0);  // add a new cell
        var txt = document.createTextNode(title);
        C.appendChild(txt);       // add its data (text)
        C = R.insertCell(1);
        txt = document.createTextNode(artist);
        C.appendChild(txt);
        //C.style.backgroundColor = "blue";
        C = R.insertCell(2);
        txt = document.createTextNode('1');
        C.appendChild(txt);

        C = R.insertCell(3);
        // In this case, that data for
        // the cell is a radio button, so creating it is
        // a bit trickier.  However, once you learn all
        // of the methods needed, it is still fairly
        // straightforward
        var rb = document.createElement('input');
        rb.setAttribute('type', 'radio');
        rb.setAttribute('name', 'options');
        rb.setAttribute('value', len);
        rb.onclick = function() { processData(1, len); };
        C.appendChild(rb);
      } else {
        alert('Write in not taken ' + ack);
      }
    } else {
      alert('Problem with request'); }
    }
  }
</script>
</body>
</html>
