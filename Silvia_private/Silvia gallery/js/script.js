var pictures = [
	{
		"title":"VeniceItaly",
		"description":"Travel",
		"url":"img/img1.jpg"
	},
	{
		"title":"DublinIreland",
		"description":"Travel2",
		"url":"img/img2.jpg"
	},
	{
		"title":"EdinburghScotland"
		"description":"Travel3",
		"url":"img/img3.jpg"
	},
	{
		"title":"VloreAlbania",
		"description":"Travel4",
		"url":"img/img4.jpg"
	},
	{
		"title":"HelsingorDenmark",
		"description":"Travel5",
		"url":"img/img5.jpg"
	},
		{
		"title":"LondonEngland",
		"description":"Travel6",
		"url":"img/img10.jpg"
	}
];

$(document).ready(function(){

	var count = 0;
	$(pictures).each(function(){

		var img = $(document.createElement("img"));
		$(img).attr({
			"src":this.url,
			"data-index":count,
			"title":this.title,
			"alt":this.description
		});

		$(img).appendTo("figure");

		var thumb = $(img).clone().appendTo("nav");

		$(thumb).bind("click",function(){

			$("figure img").each(function(){
				$(this).addClass("hidden");
			});

			$('figure img[data-index="'+this.getAttribute("data-index")+'"]').removeClass("hidden");

			$('h3').html(this.getAttribute("title"));
			$('figcaption').html(this.getAttribute("alt"));
		});
		count++;
	});
});
