<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Scheduler</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="scheduler.css" rel="stylesheet">

</head>

<body>
    
<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
    <ul class="tab">
      <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Teams')" id="defaultOpen">Teams</a></li>
      <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Judging')">Judging</a></li>
      <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Matches')">Matches</a></li>
      <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Breaks')">Breaks</a></li>
      <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Logos')">Logos</a></li>
    </ul>
      </div>
    </div>
</nav>

<!-- Team parameters -->    
<div id="Teams" class="tabcontent">
  <h3>Teams</h3>
    <table>
        <tr><td>Number of teams:&nbsp;</td><td><input type=number id="nTeams" value=24 min=1 max=999></td></tr>
        <tr><td>Min. travel (mins):</td><td><input type=number id="minTravel" value=10 min=1 max=999></td></tr>
        <tr><td colspan=2><button type="button" class="btn" onclick="loadTeamModal()" data-toggle="modal" data-target="#teamModal">Edit team names</button></td></tr>
    </table>
</div>

<!-- Team names Modal -->
<div id="teamModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Team Names</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" onclick="saveModal()" class="btn btn-default" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    
<!-- Session parameters -->
<div id="Judging" class="tabcontent">
    <h3>Judging</h3>
    <table class=roundtable>
        <tr><td colspan=2><h3>All</h3></td></tr>
        <tr><td>Start time:</td><td><input id="judgeAStart" type=time value="10:00" step="900"></td></tr>
        <tr><td>Must be done by</td><td><input id="judgeAEnd" type=time value="14:00" step="900"></td></tr>
        <tr><td>Judging length (min):</td><td><input id="jALength" type=number min=0 max=1000 value=10></td></tr>
        <tr><td>Buffer time (min):</td><td><input id="jABuffer" type=number min=0 max=1000 value=5></td></tr>
        <tr><td>Number of judges:</td><td><input id="nAJudges" type=number min=0 max=1000 value=3></td></tr>
        <tr><td colspan=2><button class="btn btn-info" onclick="judgesApplyAll()">Apply to all</button></td></tr>

    </table>
    <table class=roundtable>
        <tr><td colspan=2><h3>Robot Design</h3></td></tr>
        <tr><td>Start time:</td><td><input id="judge1Start" type=time value="10:00" step="900"></td></tr>
        <tr><td>Must be done by</td><td><input id="judge1End" type=time value="14:00" step="900"></td></tr>
        <tr><td>Judging length (min):</td><td><input id="j1Length" type=number min=0 max=1000 value=10></td></tr>
        <tr><td>Buffer time (min):</td><td><input id="j1Buffer" type=number min=0 max=1000 value=5></td></tr>
        <tr><td>Number of judges:</td><td><input id="n1Judges" type=number min=0 max=1000 value=3></td></tr>
        <tr><td colspan=2><button type="button" class="btn" onclick="loadLocationModal(1)" data-toggle="modal" data-target="#teamModal">Edit location names</button></td></tr>
    </table>
    <!-- <table class=roundtable>
        <tr><td colspan=2><h3>Core Values</h3></td></tr>
        <tr><td>Start time:</td><td><input id="judge2Start" type=time value="10:00" step="900"></td></tr>
        <tr><td>Must be done by</td><td><input id="judge2End" type=time value="14:00" step="900"></td></tr>
        <tr><td>Judging length (min):</td><td><input id="j2Length" type=number min=0 max=1000 value=10></td></tr>
        <tr><td>Buffer time (min):</td><td><input id="j2Buffer" type=number min=0 max=1000 value=5></td></tr>
        <tr><td>Number of judges:</td><td><input id="n2Judges" type=number min=0 max=1000 value=3></td></tr>
        <tr><td colspan=2><button type="button" class="btn" onclick="loadLocationModal(2)" data-toggle="modal" data-target="#teamModal">Edit location names</button></td></tr>
    </table>
    <table class=roundtable>
        <tr><td colspan=2><h3>Research Project</h3></td></tr>
        <tr><td>Start time:</td><td><input id="judge3Start" type=time value="10:00" step="900"></td></tr>
        <tr><td>Must be done by</td><td><input id="judge3End" type=time value="14:00" step="900"></td></tr>
        <tr><td>Judging length (min):</td><td><input id="j3Length" type=number min=0 max=1000 value=10></td></tr>
        <tr><td>Buffer time (min):</td><td><input id="j3Buffer" type=number min=0 max=1000 value=5></td></tr>
        <tr><td>Number of judges:</td><td><input id="n3Judges" type=number min=0 max=1000 value=3></td></tr>
        <tr><td colspan=2><button type="button" class="btn" onclick="loadLocationModal(3)" data-toggle="modal" data-target="#teamModal">Edit location names</button></td></tr>
    </table> -->
</div>

<div id="Matches" class="tabcontent">
    <h3>Matches (forced serial)</h3>
    <table class="roundTable">
        <tr><td colspan=2><h3>All</h3></td></tr>
        <tr><td>Start time:</td><td><input id="matchAStart" type=time value="10:00" step="900"></td></tr>
        <tr><td>Must be done by</td><td><input id="matchAEnd" type=time value="16:30" step="900"></td></tr>
        <tr><td>Match length (min):</td><td><input id="mALength" type=number min=0 max=1000 value=5></td></tr>
        <tr><td>Match buffer (min):</td><td><input id="mABuffer" type=number min=0 max=1000 value=5></td></tr>
        <tr><td>Tables:</td><td><input id="nATables" type=number min=0 max=1000 value=4 step=2></td></tr>
        <tr><td>Sim. Teams:</td><td><input id="nASims" type=number min=0 max=1000 value=2 step=2></td></tr>
        <tr><td colspan=2><button class="btn btn-info" onclick="matchesApplyAll()">Apply to all</button></td></tr>
    </table>
    <table class="roundTable">
        <tr><td colspan=2><h3>Round 1</h3></td></tr>
        <tr><td>Start time:</td><td><input id="match1Start" type=time value="10:00" step="900"></td></tr>
        <tr><td>Must be done by</td><td><input id="match1End" type=time value="16:30" step="900"></td></tr>
        <tr><td>Match length (min):</td><td><input id="m1Length" type=number min=0 max=1000 value=5></td></tr>
        <tr><td>Match buffer (min):</td><td><input id="m1Buffer" type=number min=0 max=1000 value=5></td></tr>
        <tr><td>Tables:</td><td><input id="n1Tables" type=number min=0 max=1000 value=4 step=2></td></tr>
        <tr><td>Sim. Teams:</td><td><input id="n1Sims" type=number min=0 max=1000 value=2 step=2></td></tr>
        <tr><td colspan=2><button type="button" class="btn" onclick="loadLocationModal(4)" data-toggle="modal" data-target="#teamModal">Edit location names</button></td></tr>
    </table>
    <table class="roundTable">
        <tr><td colspan=2><h3>Round 2</h3></td></tr>
        <tr><td>Start time:</td><td><input id="match2Start" type=time value="10:00" step="900"></td></tr>
        <tr><td>Must be done by</td><td><input id="match2End" type=time value="16:30" step="900"></td></tr>
        <tr><td>Match length (min):</td><td><input id="m2Length" type=number min=0 max=1000 value=4></td></tr>
        <tr><td>Match buffer (min):</td><td><input id="m2Buffer" type=number min=0 max=1000 value=3></td></tr>
        <tr><td>Tables:</td><td><input id="n2Tables" type=number min=0 max=1000 value=4 step=2></td></tr>
        <tr><td>Sim. Teams:</td><td><input id="n2Sims" type=number min=0 max=1000 value=2 step=2></td></tr>
        <tr><td colspan=2><button type="button" class="btn" onclick="loadLocationModal(5)" data-toggle="modal" data-target="#teamModal">Edit location names</button></td></tr>
    </table>
    <table class="roundTable">
        <tr><td colspan=2><h3>Round 3</h3></td></tr>
        <tr><td>Start time:</td><td><input id="match3Start" type=time value="10:00" step="900"></td></tr>
        <tr><td>Must be done by</td><td><input id="match3End" type=time value="17:00" step="900"></td></tr>
        <tr><td>Match length (min):</td><td><input id="m3Length" type=number min=0 max=1000 value=4></td></tr>
        <tr><td>Match buffer (min):</td><td><input id="m3Buffer" type=number min=0 max=1000 value=3></td></tr>
        <tr><td>Tables:</td><td><input id="n3Tables" type=number min=0 max=1000 value=4 step=2></td></tr>
        <tr><td>Sim. Teams:</td><td><input id="n3Sims" type=number min=0 max=1000 value=2 step=2></td></tr>
        <tr><td colspan=2><button type="button" class="btn" onclick="loadLocationModal(6)" data-toggle="modal" data-target="#teamModal">Edit location names</button></td></tr>
    </table>

</div>

<div id="Breaks" class="tabcontent">
    <h3>Breaks</h3>
    <table class='break'>
        <tr>
            <td style='padding:5px'><input id="breakname" type="text" value="Lunch">&nbsp;</td>
            <td style='padding:5px'>Start time:&nbsp;</td>
            <td style='padding:5px'><input id="breakStart" type=time value="12:00"></td>
            <td style='padding:5px'>End time:&nbsp;</td>
            <td style='padding:5px'><input id="breakEnd" type=time value="13:00"></td>
        </tr>
    </table>
</div>
<div id="Logos" class="tabcontent">
    <h3>Logos</h3>
    <table>
        <tr>
            <td style='padding:5px'><img id="majrimg" src="mqlogo.png" height="200" alt="Major sponsor">&nbsp;</td>
        <td style='padding:5px'>
	  <label class="btn btn-default btn-file"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span><input id="majrfile" type="file" onchange="majorLogo()" style="display:none"></label>&nbsp;</td>
	</tr><tr>
        <td style='padding:5px'><img id="gameimg" src="aalogo.jpg" height="200" alt="Game logo">&nbsp;</td>

        <td style='padding:5px'>
	  <label class="btn btn-default btn-file"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span><input id="gamefile" type="file" onchange="gameLogo()" style="display:none"></label>&nbsp;</td>
        </tr>
    </table>
</div>


<div class="container">
  <div class="starter-template">
  <div id="title" class="title">Australian Nationals 2016</div>
    <button onclick="changeTitle()" class="btn-link">Change</button>

    <h1>Schedule Generation</h1>
      <div class="radio">
          <label><input type="radio" value="random" name="method" checked>Random</label>
      </div>
      <div class="radio">
          <label><input type="radio" value="block" name="method">Block</label>
      </div>
  <p>Block scheduling is generally more likely to succeed and more consistent, but is less random.</p>
  <br>
      <br>
      <button id="genBtn" onclick="generate()">Generate</button>
    <p class="lead" id="words">Press the above button to attempt to generate a schedule using the given parameters.</p>
      <button id="pdfBtn" onclick="makePDFs(false)" class="btn btn-success" style="display:none">Make PDFs</button>
      <button id="pdfBtnD" onclick="makePDFs(true)" class="btn btn-success" style="display:none">Download PDFs</button>
  </div>
</div>

<div class="container">
    <div class="starter-template" id="results"></div>
</div>
    
</body>
    
<script src="tabs.js" type="text/javascript"></script>
<script src="pdf.js" type="text/javascript"></script>
<script src="generator.js" type="text/javascript"></script>
<script src="scheduler.js" type="text/javascript"></script>
<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/pdfmake.min.js"></script>
<script src="../js/vfs_fonts.js"></script>
</html>
