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
//		   Inline styles affect only the tag they are applied to.

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
// 1.    background-color
// 2.    background-image
// 3.    background-repeat
// 4.   background-attachment
// 5.   background-position

























