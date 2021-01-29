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
            // view
            //===============================================
            setTime: function() {
                var lApp = GManager.Instance().mgr.app;
                this.countTime();
                lApp.view_time = setInterval(this.countTime, 1000);
            },
            //===============================================
            countTime: function() {
                var lViewTime = document.getElementById("view_time");
                var lDate = new Date();
                lViewTime.innerHTML = lDate.toLocaleTimeString();
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
