/* Step 1: make a data structure that describes
/* where each image can be found and the title 
/* and description to display */

var pictures = [
	{
		"title":"White lily",
		"description":"A fragrant flower.",
		"url":"images/buisness.jpg"
	},
	{
		"title":"Toronto Skyline",
		"description":"A view of the city from the west side.",
		"url":"images/hellorhighwater.jpg"
	},
	{
		"title":"Sunrise",
		"description":"Morning in Little Italy.",
		"url":"images/lasagna.jpg"
	},
	{
		"title":"Fallen Branch",
		"description":"A fallen birch tree.",
		"url":"images/Persona.jpg"
	},
	{
		"title":"Amsterdam",
		"description":"Looking across the canal.",
		"url":"images/kidsjumping.jpg"
	}
];

//step 2 page load
$(document).ready(function(){
	//step 3 picture data
	var count = 0;
	$(pictures).each(function(){
		//step 4 page container
		var img = $(document.createElement("img"));
		$(img).attr({
			"src":this.url,
			"data-index":count,
			"title":this.title,
			"alt":this.description
		});
		//step 5 putting images in the container
		$(img).appendTo("figure");
		//step 6 create thumbnails
		var thumb = $(img).clone().appendTo("nav");
		//step 7 thumbnail click reaction
		$(thumb).bind("click",function(){
			//step 8 hide images
			$("figure img").each(function(){
				$(this).addClass("hidden");
			});
			//step 9
			$('figure img[data-index="'+this.getAttribute("data-index")+'"]').removeClass("hidden");
			//step 10
			$('h3').html(this.getAttribute("title"));
			$('figcaption').html(this.getAttribute("alt"));
		});
		count++;
	});
});