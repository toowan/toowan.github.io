<SCRIPT LANGUAGE="JavaScript">
function MyPopUpWin() {
var iMyWidth;
var iMyHeight;
//half the screen width minus half the new window width (plus 5 pixel borders).
iMyWidth = (window.screen.width/2) - (75 + 10);
//half the screen height minus half the new window height (plus title and status bars).
iMyHeight = (window.screen.height/2) - (100 + 50);
//Open the window.
var win2 = window.open("filename.htm","Window2","status=no,height=200,width=150,resizable=yes,left=" + iMyWidth + ",top=" + iMyHeight + ",screenX=" + iMyWidth + ",screenY=" + iMyHeight + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no");
win2.focus();
}
</SCRIPT>