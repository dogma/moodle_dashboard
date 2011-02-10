//Dashboard js
function init_dashboard() {
    YUI(M.yui.loader).use('event','event-key', 'overlay', 'node', function(Y) {

        var db = Y.one('#my-dashboard');
        if(db != null) { //This is a new adjustment to 'shutdown' the javascript if the dashboard is not available (i.e. not there).

            dashboard = new Y.Overlay({
                srcNode: "#my-dashboard",
                zIndex: 100,
                width: 990,
                height: 550,
                visible: false
            });
            dashboard.render();

            function toggleDashboard(e) {
                if(dashboard.get("visible")) {
                    dashboard.set("visible",false);
                } else {
                    dashboard.set("centered",true);
                    dashboard.set("visible",true);
                }
            }

            Y.on("click", toggleDashboard,"#dashboardbutton");
            Y.on("click", toggleDashboard,"#my-dashboard-close-button");

            Y.on('key',toggleDashboard,document,'down:68+ctrl+alt');

            db.setStyle('display','block');
        }
    });
}

init_dashboard();