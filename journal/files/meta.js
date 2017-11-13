(function() {
	var Realmac = Realmac || {};

	Realmac.meta = {
		
		// Set the browser title
		//
		// @var String text
		setTitle: function(text) {
			return document.title = text;
		},
		
		// Set the content attribute of a meta tag
		//
		// @var String name
		// @var String content
		setTagContent: function(tag, content){
			// If the tag being set is title
			// return the result of setTitle
			if ( tag === 'title' )
			{
				return this.setTitle(content);
			}
			
			// Otherwise try and find the meta tag
			var tag = this.getTag(tag);
			
			// If we have a tag, set the content
			if ( tag !== false )
			{
				return tag.setAttribute('content', content);
			}
			
			return false;
		},
		
		// Find a meta tag
		//
		// @var String name
		getTag: function(name) {
			var meta = document.querySelectorAll('meta');
			
			for ( var i=0; i<meta.length; i++ )
			{
				if (meta[i].name == name){
					return meta[i];
				}
			}
			
			var tag = document.createElement('meta');
			tag.name = name;
			document.getElementsByTagName('head')[0].appendChild(tag);
			
			return tag;
		}
	};
 
	// Object containing all website meta info
	var websiteMeta = {"category-themes.html":"A list of posts in category &ldquo;themes&rdquo;","archive-may-2014.html":"Archives for May 2014","category--.html":"A list of posts in category &ldquo; &rdquo;","tag-design.html":"Posts tagged &ldquo;design&rdquo;","tag-next.html":"Posts tagged &ldquo;next&rdquo;","archive-april-2014.html":"Archives for April 2014","tag-themes.html":"Posts tagged &ldquo;themes&rdquo;","tag-lee.html":"Posts tagged &ldquo;lee&rdquo;","6e6bd6af1d187296e0cd2a5cb31c74fb-2.html":"￼\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non ligula ipsum. Curabitur arcu felis, suscipit nec fermentum venenatis, bibendum","tag-level.html":"Posts tagged &ldquo;level&rdquo;","archive-june-2014.html":"Archives for June 2014","f317a853eb487be41cf41f0077c60e80-1.html":"￼\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non ligula ipsum. Curabitur arcu felis, suscipit nec fermentum venenatis, bibendum","category-apple.html":"A list of posts in category &ldquo;Apple&rdquo;","cfbd65cc55ca6988f01f49b18c2fe992-0.html":"￼\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non ligula ipsum. Curabitur arcu felis, suscipit nec fermentum venenatis, bibendum","category-work.html":"A list of posts in category &ldquo;Work&rdquo;","category-humor.html":"A list of posts in category &ldquo;Humor&rdquo;","category-category.html":"A list of posts in category &ldquo;category&rdquo;","category-personal.html":"A list of posts in category &ldquo;Personal&rdquo;"};
 
	// pageId must match the key in websiteMeta object
	var url = window.location.pathname;
	var pageId = url.substring(url.lastIndexOf('/')+1);
	if (!pageId || pageId.length == 0){
		pageId = 'index.html';
	}
	pageMeta = websiteMeta[pageId];
 
	// If we have meta for this page
	if (pageMeta){
		Realmac.meta.setTagContent('description', pageMeta);
	}
 
 })();