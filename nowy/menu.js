$(document).ready(function(){
	var sections = $("#menu li");
	//var loading = $("#loading");
	var content = $("#tresc");
	
	sections.click(function(){
		switch(this.id){
			case "home":
				content.load("home.html");
				break;
			case "news":
				content.load("news.html");
				break;
			case "gallery":
				content.load("gallery.html");
				break;
			case "contact":
				content.load("kontact.html");
				break;
			default:
				content.load("sections.html #section_home");
				break;
		}
	});
});