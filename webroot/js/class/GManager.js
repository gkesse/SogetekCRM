//===============================================
// struct
//===============================================
function sGManager() {
    this.app = null;
}
//===============================================
function sGApp() {
    // app
    this.app_name = null;
    // view
    this.view_time = null;
}
//===============================================
// manager
//===============================================
var GManager = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var mgr;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function() {
                this.construct();
                //this.setTime();
            },
            //===============================================
            construct: function() {
                // manager
                this.mgr = new sGManager();
                // app
                this.mgr.app = new sGApp();
                this.mgr.app.app_name = "ReadyApp";
            },
            //===============================================
            // request
            //===============================================
            run: function(obj, req) {
                //===============================================
                // view
                //===============================================
                if(req == "view_get_datetime") {
                    this.countTime();
                }
                //===============================================
            },
            //===============================================
            // view
            //===============================================
            setTime: function() {
                var lApp = GManager.Instance().mgr.app;
                this.countTime();
                //lApp.view_time = setInterval(this.countTime, 1000);
            },
            //===============================================
            countTime: function() {
                var lViewTime = document.getElementById("view_time");
                //var lDate = new Date();
                //lViewTime.innerHTML = lDate.toLocaleTimeString();
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        lViewTime.innerHTML = "lData";
                        alert(lData);
                    }
                }
                lXmlhttp.open("POST", "/php/request/request.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
                    "req=" + "view_get_datetime"
				);
            }
            //===============================================
        };
    }
    //===============================================
    return {
        Instance: function() {
            if(!m_instance) {
                m_instance = Container();
            }
            return m_instance;
        }
    };
    //===============================================
})();
//===============================================
GManager.Instance().init();
//===============================================
