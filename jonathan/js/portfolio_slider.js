$(function(){
$("#elastic_grid_demo").elastic_grid({
	'hoverDirection': true,
	'hoverDelay': 0,
	'hoverInverse': false,
	'expandingSpeed': 500,
	'expandingHeight': 500,
	'items' :
		[


			{
			'title' : 'Sample 1',
			'description'   : 'Sample News 1 Description',
			'thumbnail' : ['img/portfolio/small/1a.png', 'img/portfolio/small/1b.png'],
			'large' : ['img/portfolio/large/1a.png', 'img/portfolio/large/1b.png'],
			'button_list'   :
			[
			{ 'title':'View News', 'url':'#'}
			],
			'tags'  : ['All', 'News']
			},
			{
			'title' : 'Sandwich 1',
			'description'   : 'Description for 1st Sandwich',
			'thumbnail' : ['img/portfolio/small/3a.png'],
			'large' : ['img/portfolio/large/3a.png'],
			'button_list'   :
			[
			{ 'title':'View Image', 'url' : '#' }
			],
			'tags'  : ['All', 'Images']
			},
			{
			'title' : 'Sandwich 2',
			'description'   : 'Description for 2nd Sandwich',
			'thumbnail' : ['img/portfolio/small/4a.png'],
			'large' : ['img/portfolio/large/4a.png'],
			'button_list'   :
			[
			{ 'title':'View Image', 'url' : '#' }
			],
			'tags'  : ['All', 'Images']
			},
			{
			'title' : 'Sample 2',
			'description'   : 'Description for 2nd News Item',
			'thumbnail' : ['img/portfolio/small/2a.png', 'img/portfolio/small/2b.png', 'img/portfolio/small/2c.png'],
			'large' : ['img/portfolio/large/2a.png', 'img/portfolio/large/2b.png', 'img/portfolio/large/2c.png'],
			'button_list'   :
			[
			{ 'title':'View News', 'url' : '#' }
			],
			'tags'  : ['All', 'News']
			},
			{
			'title' : 'Sample 2',
			'description'   : 'Description for 2nd News Item',
			'thumbnail' : ['img/portfolio/small/2a.png', 'img/portfolio/small/2b.png', 'img/portfolio/small/2c.png'],
			'large' : ['img/portfolio/large/2a.png', 'img/portfolio/large/2b.png', 'img/portfolio/large/2c.png'],
			'button_list'   :
			[
			{ 'title':'View News', 'url' : '#' }
			],
			'tags'  : ['All', 'News']
			}

		]
	});
});
