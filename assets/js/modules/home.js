// Home
window.mod.home = function() {

	// Scope
	var that = this;

	var init = function() {
		console.log('[brz] begin home.js');
		window.mod['slide'] = new window.mod['slide']();
		window.mod['carousel'] = new window.mod['carousel']();
	};

	init();

};
