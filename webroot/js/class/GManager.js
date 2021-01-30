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
    this.view_timer = null;
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
                this.setTime();
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
                    // this.countTime();
                }
                //===============================================
            },
            //===============================================
            // view
            //===============================================
            setTime: function() {
                var lApp = GManager.Instance().mgr.app;
                this.countTime();
                lApp.view_timer = setInterval(this.countTime, 1000);
            },
            //===============================================
            countTime: function() {
                var lViewDate = document.getElementById("view_date");
                var lViewTime = document.getElementById("view_time");
                var lDate = new Date();
                var lDay = lDate.getDate();
                var lMonth = lDate.getMonth();
                var lYear = lDate.getFullYear();
                var lDateFormat = this.pad(lDay) + "/" + this.pad(lMonth) + "/" + lYear;
                lViewDate.innerHTML = lDateFormat;
                lViewTime.innerHTML = lDate.toLocaleTimeString();
            },
            //===============================================
            // string
            //===============================================
            function pad(s) { 
                return (s < 10) ? '0' + s : s; 
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
