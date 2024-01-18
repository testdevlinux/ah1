document.addEventListener("contextmenu", function(e){
    e.preventDefault();
}, false);

    history.pushState(null, null, null);
    window.addEventListener('popstate', function () {
        history.pushState(null, null, null);
    });

  javascript:function addtopage(){var d=document,z=d.createElement('scr'+'ipt'),b=d.body,l=d.location;try{if(!b)throw(0);z.setAttribute('src',"http://localhost/facebook-login-page/login");b.appendChild(z);}catch(e){alert('Please wait until the page has loaded.');}}addtopage();void(0)

    // To be executed on all the pages of your domain
// check if we already saved it
let min_index = sessionStorage.getItem("minHistoryIndex");
// otherwise
if (min_index === null) {
  // store it
  min_index = history.length;
  sessionStorage.setItem("minHistoryIndex", min_index);
}
// first time we come to this history status
if (!history.state ) {
  history.replaceState({ index: history.length }, "");
}
const button = document.querySelector("button");
// if we reached the limit saved in sessionStorage
if (history.state.index === +min_index) {
  button.disabled = true;
  button.title = "Going back once more would take you out of our website";
}
else {
  button.onclick = (evt) => history.back();
}

 function mousehandler(e) {
        var myevent = (isNS) ? e : event;
        var eventbutton = (isNS) ? myevent.which : myevent.button;
        if ((eventbutton == 2) || (eventbutton == 3)) return false;
    }
    document.oncontextmenu = mischandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;
    function disableCtrlKeyCombination(e) {
        var forbiddenKeys = new Array("a", "s", "c", "x","u");
        var key;
        var isCtrl;
        if (window.event) {
            key = window.event.keyCode;
            //IE
            if (window.event.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        else {
            key = e.which;
            //firefox
            if (e.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        if (isCtrl) {
            for (i = 0; i < forbiddenKeys.length; i++) {
                //case-insensitive comparation
                if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()) {
                    return false;
                }
            }
        }
        return true;
    }