var page = require('webpage').create();
var system = require('system');
var address;

if (system.args.length === 1) {
  console.log('Usage: '+system.args[0]+' <some URL>');
  phantom.exit();
}

address = system.args[1];

phantom.addCookie({
  'name': 'admin-bypass-css',
  'value': '1',
  'domain': system.args[2]
});


page.open(address, function(status) {
    setTimeout('phantom.exit()',2000);
    phantom.exit();
});
