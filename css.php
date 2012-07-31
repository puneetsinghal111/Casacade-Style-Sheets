<?php 

// Definition of CSS:- Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation semantics (the look and formatting) of a document written in a markup language. Its most common application is to style web pages written in HTML and XHTML.

//What is CSS?

// 1.   CSS stands for Cascading Style Sheets
// 2.   Styles define how to display HTML elements
// 3.   Styles were added to HTML 4.0 to solve a problem
// 4.   External Style Sheets can save a lot of work
// 5.   External Style Sheets are stored in CSS files


//Types of CSS:-

// 1. Inline CSS:- Inline styles are styles that are written directly in the tag on the document. 
//  	   Inline styles affect only the tag they are applied to.

//<div id="demo" style="text-align:center; text-decoration:underline; font-family:Arial;"> This is a demo of inline CSS. </div>

// 2. Internal (or Embedded) CSS:- Embedded styles are styles that are embedded in the head of the
//		 document. Embedded styles affect only the tags on the page they are embedded in.
// For example:- <style type="text/css">
//			p { color: #00f; }
//		</style>

//3. External CSS:- External styles are styles that are written in a separate document and 
//		then attached to various Web documents. 
//		External style sheets can affect any document they are attached to.
// For example:-  <link rel="stylesheet" type="text/css" href="styles.css" />


// CSS FRAMEWORKS:-

//CSS frameworks are pre-prepared libraries that are meant to allow for easier, 
// more standards-compliant styling of web pages using the Cascading Style Sheets language. 

//Layout-grid-related CSS frameworks include:-
// 1. Blueprint, 
// 2. 960 grid, and 
// 3. YUI CSS grids. 
//Like programming and scripting language libraries, CSS frameworks are usually incorporated 
// as external .css sheets referenced in the HTML <head>. They provide a number of ready-made 
// options for designing and laying out the web page. While many of these frameworks have been
// published, some authors use them mostly for rapid prototyping, or for learning from, 
// and prefer to 'handcraft' CSS that is appropriate to each published site without the design,
// maintenance and download overhead of having many unused features in the site's styling.



// CSS Syntax:-

// A CSS rule has two main parts: a selector, and one or more declarations:
// For example:- 
// 	div <- (This is a selector)
//	{
//	  text-align:center; <- (This is a declarations) 
//	  text-decoration <- (Property) : underline <- (Value); 
//	  font-family:Arial;
//	}



// The id and class Selectors:- 

// In addition to setting a style for a HTML element, CSS allows you to specify your own 
// selectors called "id" and "class".

// 1. id Selector
// 		The id selector is used to specify a style for a single, unique element.
// 		For example:- 
//			#para1
//			{
//	  		  text-align:center;
//	  		  color:red;
//			}

// 2. class Selector
//		The class selector is used to specify a style for a group of elements. 
//		Unlike the id selector, the class selector is most often used on several elements. 
//		For example:-
//			.center 
//			{
//			  text-align:center;
//			}

// Special Case:- 
// We can also specify that only specific HTML elements should be affected by a class.
// In the example below, all p elements with class="center" will be center-aligned: 
// For example:- 
// p.center {
//	text-align:center;
// } 


// CSS BACKGROUND:- 
// CSS background properties are used to define the background effects of an element.
// CSS properties used for background effects:
// 1.   background-color
// 2.   background-image
// 3.   background-repeat
// 4.   background-attachment
// 5.   background-position


//CSS Links:-
//Links can be styled with any CSS property (e.g. color, font-family, background, etc.).

// 1.    a:link - a normal, unvisited link
// 2.    a:visited - a link the user has visited
// 3.    a:hover - a link when the user mouses over it
// 4.    a:active - a link the moment it is clicked
// For example:-
//		a:link {text-decoration:none;}
//		a:visited {text-decoration:none;}
//		a:hover {text-decoration:underline;}
//		a:active {text-decoration:underline;}


//CSS Lists:-
//	In HTML, there are two types of lists:
//		1. unordered lists - the list items are marked with bullets
//		2. ordered lists - the list items are marked with numbers or letters
//With CSS, lists can be styled further, and images can be used as the list item marker.

//For example
//		ul.a {list-style-type: circle;}
//		ul.b {list-style-type: square;}
//		ol.c {list-style-type: upper-roman;}
//		ol.d {list-style-type: lower-alpha;}


//The CSS Box Model:-
// All HTML elements can be considered as boxes. In CSS, the term "box model" is used when talking about design and layout.
// The CSS box model is essentially a box that wraps around HTML elements, and it consists of: 
//	a) margins, 
//	b) borders, 
//	c) padding, and 
//	d) the actual content.


//CSS Display and Visibility:- 
//	display:none||inline||block;
//	visibility:hidden;

// Note:- IMP Difference between both of them
// visibility:hidden :- hides an element, but it will still take up the same space as before. 
// 			The element will be hidden, but still affect the layout.
// display:none  :- hides an element, and it will not take up any space. The element will be hidden, 
//		and the page will be displayed as if the element is not there.


// CSS Positioning:-
// The CSS positioning properties allow you to position an element. It can also place an element behind another, 
// and specify what should happen when an element's content is too big.

// Elements can be positioned using the top, bottom, left, and right properties. However, these properties will not 
// work unless the position property is set first. They also work differently depending on the positioning method.

// There are four different positioning methods:-
// 	1. Static Positioning :- HTML elements are positioned static by default. A static positioned element is always
//				positioned according to the normal flow of the page. Static positioned elements are not affected by 
//				the top, bottom, left, and right properties.

//	2. Fixed Positioning :- An element with fixed position is positioned relative to the browser window.

// 	3. Relative Positioning :- A relative positioned element is positioned relative to its normal position.

//	4. Absolute Positioning :- An absolute position element is positioned relative to the first parent element that has a position other than static. 
//				If no such element is found, the containing block is <html>


