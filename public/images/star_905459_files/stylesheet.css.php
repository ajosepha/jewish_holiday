/* Reset all default browser settings */
html,body,div,ul,ol,li,dl,dt,dd,h1,h2,h3,h4,h5,h6,pre,form,p,blockquote,fieldset,input,hr {margin:0; padding:0;}
h1,h2,h3,h4,h5,h6,pre,code,address,caption,cite,code,em,strong,th {font-size:1em; font-weight:normal; font-style:normal;}
ul,ol {list-style:none;}
fieldset,img,hr {border:none;}
caption,th {text-align:left;}
table {border-collapse:collapse; border-spacing:0;}
td {vertical-align:top;}
iframe { border: 0 none; }
/* End reset all default browser settings */

/* Body */
html,body {
	margin: 0;
	padding: 0;
	font-family: arial;
	font-size: 10pt;
	color: #4b4b4b;
	background-image: url("../images/background.png");
	background-position: 0 0;
	background-repeat: repeat-x;
	background-color: #0082c8;
	height: 100%;
}

#clearfix { clear:both; }

body:before {
	content:"";
	height:100%;
	float:left;
	width:0;
	margin-top:-32767px;
}

A { outline: none; color: #4b4b4b; }

h1, h2, strong { font-weight: bold; }

#error_report { display: none; }

#Wrapper {	
	width: 100%;
	min-height: 100%;
	height: 100%;
	background: url("../images/background-header.png");
	background-repeat: repeat-x;
}

#Container {
	position: relative;
	float: left;
	left: 50%;
	margin-left: -490px;
	width: 980px;
	padding-bottom: 125px;
}
/* End body */

/* Header */
#Header {
	height: 152px;
	width: 972px;
}

#HeaderLeft {
	float: left;
	width: 656px;
	height: 143px;
}

#HeaderRight {
	float: right;
	width: 314px;
	margin-top: 42px;
	z-index: 100;
}
/* End header */

/* Topmenu */
#TopMenu {
	float: left;
	width: 972px;
	height: 42px;
}

#TopMenu UL li {
	float: left;
	height: 42px;
}

#TopMenu UL, .SearchResults UL, .suggestionList UL, #searchList UL, #LoggedOnMenu UL, #TrendingTopics UL, #oUsers UL, #AlbumOverview UL, .bUploaders UL, #AlbumMenu UL, .collom UL, .Menu UL, #NewsRight H2 A, .ContentBlockProfileAlbum UL, #FriendsOverview UL, #ContentBlockLU UL, .ContentBlockProfileFriends UL, #ChatFriends UL, .GameCollom UL, #friendsList UL, #EcardsHolder, #DetailMenu UL, .EcardMenu UL, .RespectBox, .scrollBox, .RespectBox UL, .Facebox IMG, .ContentBlock UL.respect, .respects UL {
	margin: 0;
	padding: 0;
	list-style: none;
}

#TopMenu UL LI A {
	float: left;
	padding-top: 11px;
	font-size: 14px;
	text-shadow: #b66f39 1px 1px 0;
	font-weight: bold;
	color: #fff;
	padding-left: 36px;
	padding-right: 36px;
	padding-left: 37px\9;
	padding-right: 37px\9;
	height: 31px;
	text-align: center;
	text-decoration: none;
	border-right: 1px solid #fea240;
}

#TopMenu UL LI A:hover, #TopMenu UL LI A.active {
	background-color: #FFA252;
}

#TopMenu #Last A {
	border-right: 0px;
}
/* End Topmenu */

/* Logo */
#Logo {
	margin-top: 36px;
	margin-left: 5px;
	float: left;
	width: 175px;
}
/* End logo */

/* Search */
#Search {
	margin-top: 36px;
	margin-left: 35px;
	float: left;
	height: 38px;
	width: 410px;
	background-color: #ececec;
	border-radius: 5px;
}

#Search input[type="text"]{
	background-image: url("../images/icons.png");
	background-repeat: no-repeat;
	background-position: 1px -371px;
	color: #939393;
	float: left;
	padding-left: 25px;
	padding-top: 0px;
	padding-top: 1px\9;
	margin-top: 4px;
	margin-left: 4px;
	width: 157px;
	height: 28px;
	height: 27px\9;
	border-radius: 3px;
	border: 1px solid #ccc;
}

#Search button[type="submit"] {
	background-color: #F89006;
	border: 1px solid #F0710A;
	border-radius: 4px;
	color: #fff;
	font-weight: bold;
	font-family: arial;
	font-size: 12px;
	float: right;
	margin-right: 4px;
	margin-top: 4px;
	width: 79px;
	height: 30px;
	cursor: pointer;
}

#SearchCategories {
	float: left;
	width: 129px;
	border-radius: 3px;
	border: 1px solid #ccc;
	margin-left: 4px;
	margin-top: 4px;
	height: 28px;
	background-color: #fff;
}

#SearchCategories A {
	display: block;
	padding-top: 5px;
	padding-top: 7px\9;
	padding-left: 8px;
	width: 100%;
	height: 100%;
	color: #939393;
	text-decoration: none;
}

#SearchCategories A IMG {
	margin-top: 4px;
	margin-right: 17px;
	float: right;
}

.suggestionsBox {
	position: relative;
	width: 396px;
	background-color: #fff;
	border: 2px solid #ccc;
	color: #4b4b4b;
	float: left;
	padding: 5px;
	margin-top: 10px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
	border-radius: 5px;
	z-index: 1000;
	display: none;
	box-shadow: 0 0 5px rgba(0,0,0,0.5);
}

.suggestionsBox h1 {
	color: #FF8220;
	font-size: 16px;
	margin-left: 6px;
	margin-top: 7px;
	margin-bottom: 8px;
}

.SuggestionCat {
	float: left;
	width: 195px;
}

.SearchResults {
	margin-top: -8px;
}

.SearchResults H2 {
	float: left;
	color: #FF8220;
	font-size: 16px;
	margin-left: 12px;
	margin-top: 5px;
	margin-bottom: 8px;
}

.SearchResults UL {
	float: left;
	position: relative;
	width: 728px;
	margin-bottom: 4px;
}

.SearchResults LI {
	float: left;
	list-style: none;
	width: 182px;
}

.SearchResults LI A {
	float: left;
	margin-left: 14px;
	width: 165px;
	height: 38px;
	margin-bottom: 6px;
	text-decoration: none;
}

.SearchResults LI A:hover {
	background-color: #ddd;
}

.SearchResults LI A SPAN {
	width: 115px;
	overflow: hidden;
}

.SearchResults A IMG {
	border: 1px solid #bbb;
	background-color: #fff;
	padding: 1px;
	margin-left: -3px;
	width: 34px;
	height: 34px;
}

/*  Individual Search Results  */
.suggestionList {
	margin-top: -3px;
}

.suggestionList li {
	margin: 0px;
	cursor: pointer;
	list-style-type: none;
	display: block;
}

.suggestionList li a {
	width: 185px;
	display: block;
	float: left;
	text-decoration: none;
	margin-bottom: 6px;
	margin-left: 6px;
}

.suggestionList li a:hover {
	background-color: #eee;
}

.suggestionList img {
	border: 1px solid #cdcdcd;
	width: 50px;
	height: 50px;
	padding: 1px;
}

.SuggestionTitle {
	position: absolute;
	float: left;
	margin-left: 5px;
	height: 18px;
	overflow: hidden;
	width: 130px;
	font-weight: bold;
}

.SuggestionTotali {
	position: absolute;
	float: left;
	margin-left: 5px;
	margin-top: 20px;
	width: 130px;
	color: #b0b0b0;
}

#SearchReAds {
	margin-left: 14px;
	margin-top: 4px;
	margin-bottom: 14px;
}
/*  Hover effect  */

.searchBox {
	float: left;
	position: relative;
	width: 309px;
	background-color: #fff;
	border: 2px solid #ccc;
	color: #4b4b4b;
	padding: 5px;
	margin-top: 10px;
	margin-right: 0px;
	margin-bottom: 0px;
	border-radius: 5px;
	z-index: 1000;
	display: none;
	box-shadow: 0 0 5px rgba(0,0,0,0.5);
}

#searchList UL LI {
	float: left;
	width: 145px;
	height: 20px;
}	

#searchList UL LI input[type=radio] {
	float: left;
}

#searchList UL LI LABEL {
	float: left;
	margin-left: 5px;
	margin-top: 2px;
	width: 100px;
	text-align: left;
	height: 19px;
	overflow: hidden;
}
/* End search */

/* Login */
#Login {
	float: right;
	padding-top: 5px;
	background: url("../images/login-bg.png");
	width: 314px;
	height: 93px;
}

#LoginLeft {
	float: left;
	width: 184px;
}

#LoginRight {
	float: right;
	width: 128px;
}

.statusImage {
	margin-top: 3px;
	margin-bottom: -5px;
}

#Login input[type="text"], #Login input[type="password"] {
	float: left;
	color: #999;
	padding: 0px;
	margin: 0px;
	padding-left: 6px;
	margin-top: 4px;
	margin-left: 8px;
	width: 165px;
	height: 24px;
	font-size: 12px;
	font-family: arial;
	border-radius: 5px;
	font-style: italic;
	border: 1px solid #D3D3D3;
	box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.15) inset;
}

#Login input[type="password"] {
	color: #c5c5c5;
	margin-top: 4px;
}

#Login button[type="submit"] {
	color: #fff;
	font-weight: bold;
	float: left;
	margin-left: 3px;
	margin-top: 0px;
	margin-top: -1px\9;
	width: 111px;
	height: 25px;
	height: 26px/9;
	padding: 0px;
	background-color: #4D90FE;
	border: 1px solid #3079ED;
	border-radius: 4px;
	cursor: pointer;
	text-align: center;
}

#Login button[type="submit"]:hover {
	background-color: #1A7BD0;
}

span#LoginText {
	float: left;
	color: #5e5e59;
	margin-top: 3px;
	font-size: 14px;
	font-weight: bold;
	margin-left: 10px;
	margin-bottom: 4px;
}


span#LoginStay, span#PwForget {
	float: left;
	height: 20px;
	margin-left: 2px;
	margin-top: -2px;
}

span#LoginAccount a {
	float: right;
	margin-top: 4px;
	height: 15px;
	margin-right: 14px;
	font-family: verdana;
	font-size: 10px;
	color: #f87807;
	text-decoration: underline;
	font-weight: bold;
	margin-bottom: 21px;
}
/* End login */

/* Logged on */
#LoggedOn {
	position: relative;
	width: 308px;
	height: 98px;
	margin-top: 22px;
	background-color: #eee;
	border-top-left-radius: 8px;
	border-top-right-radius: 8px;
	margin-bottom: -10px;
	margin-left: 4px;
}

#LoggedOn A.avatar {
	float: right;
	display: block;
	width: 52px;
	height: 52px;
	margin-top: 10px;
	margin-right: 10px;
	border: 1px solid #777;
}

#LoggedOn A.avatar:hover {
	border: 1px solid #222;
}

#LoggedOn A.avatar IMG {
	width: 50px;
	height: 50px;
	border: 1px solid #fff;
}

#LoggedOn H1 {
	text-align: left;
	margin-bottom: 7px;
	float: left;
	color: #116F80;
	font-size: 11pt;
	width: 227px;
	height: 17px;
	margin-top: 9px;
	margin-left: 13px; 
}

#LoggedOn H1 SPAN {
	float: left;
}

#LoggedOn H1 SPAN.status {
	float: left;
	margin-left: 3px;
}

#LoggedOn H1 SPAN.status A {
	margin-top: 3px;
	font-size: 8pt;
	color: #fff;
	text-decoration: none;
	display: block;
	font-weight: 10;
}

#LoggedOn H1 SPAN.status A IMG {
	float: left;
	margin-top: -3px;
	border: none;
}

#LoggedOn H1 IMG:hover {
	cursor: pointer;
}

#LoggedOnMenu {
	float: left;
	width: 235px;
	height: 30px;
	margin-top: 2px;
	margin-left: 7px;
}

#LoggedOnMenu ul li {
	float: left;
	height: 17px;
}

#LoggedOnMenu UL LI A {
	float: left;
	width: 83px;
	height: 15px;
	font-size: 11px;
	padding-left: 7px;
	color: #4B4B4B;
	text-decoration: none;
}

#LoggedOnMenu UL LI A.small {
	width: 52px;
}

#LoggedOnMenu UL LI A.small2 {
	width: 72px;
}

#LoggedOnMenu UL LI A.small3 {
	position: absolute;
	width: 100px;
}

#LoggedOnMenu UL LI A:hover {
	color: #373737;
	text-decoration: underline;
}
/* End logged on */

/* Left-right */
#Left {
	display: table-tr;
	float: left;
	width: 203px;
	margin-right: 10px;
}

#Right {
	display: table-tr;
	float: left;
	margin-right: 7px;
	width: 759px;
}
/* End left-right */

/* Menu */
.Menu {
	margin-top: 8px;
	width: 203px;
	float: left;
	height: auto;
	background-color: #fff;
	border-radius: 8px;	
	padding-bottom: 10px;
	margin-bottom: 13px;
}
.Menu .MenuTop, .Menu .MenuTopCreate, .Menu .MenuTopForum {
	margin-top: -8px;
	display: block;
	width: 203px;
	height: 36px;
}
.Menu .MenuTop {
	background: url("../images/menu-top.png");
}
.Menu .MenuTopCreate {
	background: url("../images/menu-top-create.png");
}
.Menu .MenuTopForum {
	background: url("../images/menu-top-forum.png");
}
.Menu .MenuTop SPAN, .Menu .MenuTopCreate SPAN, .Menu .MenuTopForum SPAN, .Menu UL.more {
	display: none;
}
.Menu UL LI A {
	color: #4b4b4b;
	text-decoration: none;
	display: block;
	padding-top: 6px;
	padding-top: 7px\9;
	padding-left: 16px;
	height: 22px;
	height: 21px\9;
	border-bottom: 1px solid #e5e5e5;
}
.Menu UL LI A:hover, .Menu UL LI A.active  {
	background-position: 5px -415px;
	color: #373737;
	background-color: #eee;
}
.Menu UL LI A SPAN {
	float: right;
	margin-top: -2px;
	margin-right: 12px;
}

#MenuAds {
	float: left;
	width: 200px;
	height: 200px;
	margin-left: 2px;
	margin-bottom: 12px;
}
/* End menu */

/* Standard content */
.ContentBlock {
	position: relative;
	margin-top: 8px;
	float: left;
	background-color: #fff;
	width: 754px;
	border-radius: 7px;
	margin-bottom: 15px;
	margin-left: 3px;
	padding-bottom: 0px;
	z-index: 10;
}

.ContentBlock H1, #ContentBlockLU H1 {
	background-image: url("../images/content-top.png");
	width: 742px;
	height: 28px;
	height: 26px\9;
	color: #fff;
	font-size: 16px;
	border-top-left-radius: 7px;
	border-top-right-radius: 7px;
	margin: 0px;
	margin-top: -8px;
	padding-top: 8px;
	padding-top: 10px\9;
	padding-left: 12px;
	font-size: 16px;
	text-shadow: 0px 1px #b66f39;
	margin-bottom: 13px;
}

.ContentBlock H1 i, #ContentBlockLU H1 i, .ContentBlockProfileInfo H1 i, .ContentBlockProfileFriends H1 i, #ContentBlockProfileTags H1 i, #CBTags H1 i {
	margin-top: -2px\9;
}

.ContentBlock H1 IMG, #AlbumDetail H1 IMG {
	float: left;
	border: none;
	margin-top: 2px;
	margin-right: 8px;
	margin-left: -2px;
}

.DetailRightTop IMG {
	float: left;
	border: none;
	margin-top: 1px;
	margin-right: 8px;
}

.ContentBlock H1 A, .ContentBlockProfileAlbum H1 A, .ContentBlockProfileFriends H1 A {
	color: #fff;
	text-decoration: none;
}

.ContentBlock H1 .AddCat, .ContentBlock H1 #AddImg {
	float: right;
	font-size: 10pt;
	color: #fff;
	text-decoration: none;
	margin-top: -8px;
	margin-top: -10px\9;
	margin-right: 2px;
}

#AddImg {
	background-image: url("../images/add-img.png");
	background-position: 0 2px;
	background-repeat: no-repeat;
	height: 36px;
	width: 164px;
}

#AddImg:hover {
	background-image: url("../images/add-img.png");
	background-position: 0 -34px;
}

.AddCat {
	background-image: url("../images/add-cat.png");
	background-position: 0 2px;
	background-repeat: no-repeat;
	height: 36px;
	width: 178px; /* Chrome */
}

.AddCat:hover {
	background-image: url("../images/add-cat.png");
	background-position: 0 -34px;
}

.ContentBlock H1 SPAN.Buttons {
	float: right;
}

.ContentBlock H1 SPAN.Buttons IMG {
	border: none;
}

.ContentBlock P {
	margin: 0px;
	padding-left: 13px;
	margin-bottom: 13px;
	width: 728px;
}

.ContentBlock .Left {
	float: left;
	width: 360px;
	margin-left: 14px;
}

.ContentBlock .Right {
	float: right;
	width: 360px;
	margin-left: 14px;
}

.ContentBlock HR {
	float: left;
	width: 722px;
	margin-left: 14px;
	color: #fff;
}
/* End standard content */

/* Fast menu (A,B,C) */
#FastMenu {
	float: right;
	background-color: #fff;
	width: 754px;
	border-radius: 7px;
	margin-bottom: 12px;
	margin-top: 2px;
	margin-right: 2px;
	height: 35px;
}

#FastMenu UL#Alphabet {
	margin: 10px;
	float: left;
	padding: 0px;
}

#FastMenu UL#Alphabet LI {
	list-style: none;
	float: left;
}	

#FastMenu UL#Alphabet LI A {
	display: block;
	float: left;
	height: 15px;
	width: 21px;
	color: #4B4B4B;
	text-decoration: none;
	text-align: center;
}	

#FastMenu UL#Alphabet LI A:hover {
	color: #ff0000;
}
/* End fast menu (A,B,C) */

/* Advertisement vertical */
.Advertisement {
	margin-left: 13px;
	margin-bottom: 13px;
}

#RightAdvertisement {
	float: left;
	margin-top: 44px;
	background-color: #fff;
	width: 172px;
	height: 612px;
	border-radius: 5px;
	margin-bottom: 12px;
	overflow: hidden;
}

#RightAdvertisement .big {
	margin: 6px;
}
/* End advertisement vertical */

/* Categorie overzicht */
.ContentBlock UL.overview, .ContentBlock UL.Help { 
	margin: 0px;
	padding: 0px;
	margin-left: 13px;
	margin-bottom: 13px;
	float: left;
}

.ContentBlock UL.overview LI, .ContentBlock UL.Help LI {
	margin-right: 8px;
	list-style: none;
	height: 21px;
	overflow: hidden;
}

.ContentBlock UL.overview LI A, .ContentBlock UL.Help LI A {
	background-image: url("../images/icons.png");
	background-repeat: no-repeat;
	background-position: -8px -399px;
	padding-left: 13px;
	color: #4b4b4b;
	display: block;
	width: 154px;
	text-decoration: none;
}

.ContentBlock UL.overview LI A:hover, .ContentBlock UL.Help LI A:hover {
	color: #373737;
	background-position: -8px -421px;
}

.ContentBlock UL LI A:hover , .ContentBlock UL LI A:hover {
	color: #373737;
}

.ContentBlock UL.Help LI A, .ContentBlock UL.Help LI A {
	width: 330px;
}
/* End categorie overzicht */

/* Editor */
#PostRight .sceditor-container {
	margin-top: 4px;
	width: 510px;
	border-radius: 2px;
	border-color: #bbb;
}
/* End editor (heeft eigen css bestand) */

/* Chatten */
.Chat {
	margin-top: 8px;
	width: 203px;
	float: left;
	height: auto;
	background-color: #fff;
	border-radius: 8px;	
	padding-bottom: 10px;
	margin-bottom: 13px;
}

.Chat .MenuTop {
	margin-top: -8px;
	display: block;
	width: 203px;
	height: 36px;
}

.Chat .MenuTop {
	background: url("../images/menu-top-chat.png");
}

.Chat .MenuTop span {
	display: none;
}

.Chat ul {
	padding: 0px;
	margin: 0px;
}

.Chat li {
	list-style: none;
	float: left;
	padding: 0;
	margin-top: 5px;
	margin-left: 5px;
	height: 43px;
}

.Chat li a {
	text-decoration: none;
}

.Chat p {
	padding: 10px;
	margin-top: -4px;
	margin-bottom: -10px;
}

.ChatAvatar img {
	width: 40px;
	height: 40px;
	border: 1px solid #aaa;
	padding: 1px;
}

.ChatAvatar img:hover {
	border: 1px solid #444;
}

.ChatStatus IMG {
	position: absolute;
	margin-left: 26px;
	margin-top: 26px;
	border: none;
}

#ChatSettings i {
	float: right;
	margin-right: 6px;
	margin-top: 8px;
}
/* End chatten */

/* Private message */
#PmTop {
	background-color: #F5F5F5;
	float: left;
	width: 708px;
	height: 19px;
	font-size: 15px;
	font-weight: bold;
	border: 1px solid #dedede;
	padding: 10px;
	border-top-left-radius: 6px;
	border-top-right-radius: 6px;
	margin-left: 12px;
}

#PmTop span {
	float: right;
	font-size: 13px;
	font-weight: normal;
	margin-top: 2px;
}

#PmMenu {
	background-color: #F5F5F5;
	float: left;
	width: 714px;
	height: 16px;
	font-weight: bold;
	border: 1px solid #dedede;
	border-top: none;
	padding: 6px;
	padding-left: 8px;
	margin-left: 12px;
}

#PmMenu img {
	float: left;
	display: block;
	border: none;
}

#PmMenu a {
	color: #666;
}

#PmMenu A SPAN:hover, #NewsRight H2 A:hover, .Forum A:hover, #AlbumMenu A:hover, .Chat p a:hover, .caption a:hover, #AlbumImage #slideshow span.image-wrapper BUTTON:hover, #AlbumOverview UL SPAN.InfoLeft A:hover, #AlbumOverview SPAN A:hover, #BestUploaders .Item A:hover, #AllNews A:hover, .ContentBlockProfileAlbum SPAN#Right A:hover, .ContentBlockProfileInfo A:hover, .ContentBlockProfileFriends SPAN A:hover, #LoginStatus A:hover, .QuoteButton BUTTON:hover, .MemberInfo A:hover, .PmItem .Username:hover, #ForumAddTopic A:hover, .GameCollom SPAN A:hover, #PrintButton BUTTON:hover, #DetailInfo A:hover, .PmItem .Subject:hover, .PmItem .SubjectRead:hover, #PmSelect:hover, #PmDeleteAll button:hover, .MessageRight .respect BUTTON:hover {
	text-decoration: underline;
}

#PmMenu SPAN {
	display: block;
	padding-left: 6px;
	padding-right: 9px;
	float: left;
	margin-top: -1px;
}

#PmReader {
	margin-bottom: 12px;
}

#PmReader p {
	margin-left: -12px;
	width: 712px;
}

.PmItem, #PmReader {
	width: 708px;
	padding: 10px;
	float: left;
	margin-left: 12px;
	text-decoration: none;
	border: 1px solid #dedede;
	border-top: none;
}

.PmItem:hover {
	background-color: #f8f8f8;
}

.PmItem .Avatar {
	float: left;
	width: 49px;
	height: 49px;
	padding: 1px;
	border: 1px solid #666;
	margin-right: 8px;
}

.PmItem .Username {
	float: left;
	width: 90px;
	margin-top: 17px;
	padding-left: 20px;
	text-decoration: none;
	text-align: left;
}

.PmItem .Subject {
	font-weight: bold;
}

.PmItem .SubjectRead, .PmItem .Subject {
	float: left;
	width: 263px;
	padding-left: 20px;
	margin-left: 8px;
	margin-top: 17px;
	text-decoration: none;
}

.PmItem .Date {
	float: left;
	width: 150px;
	margin-top: 17px;
	margin-left: 8px;
	padding-left: 20px;
}

.PmItem .Buttons {
	float: left;
	margin-left: 8px;
	width: 40px;
	padding-left: 20px;
	font-weight: bold;
	margin-top: 17px;
}

.PmItem .Buttons .Delete {
	margin-left: 2px;
}

.PmItem .Buttons INPUT {
	margin-left: 26px;
}

.PmItem .Username IMG, .PmItem .Subject IMG, .PmItem .SubjectRead IMG, .PmItem .Date IMG, .PmItem .Buttons IMG {
	position: absolute;
	margin-top: 0px;
	margin-left: -20px;
	border: none;
}

#PmSelect {
	float: right;
	font-weight: normal;
	text-decoration: none;
}

#PmStats {
	float: left;
	margin-top: 6px;
	margin-left: 12px;
	margin-bottom: 12px;
	text-align: right;
	color: #777;
	float: left;
}

#PmPost {
	width: 708px;
	padding: 10px;
	float: left;
	margin-left: 12px;
	margin-bottom: 12px;
	text-decoration: none;
	border: 1px solid #ccc;
	border-top: none;
}

#PmPostRight {
	float: right;
	width: 496px;
	margin-bottom: 4px;
}

#PmPostLeft {
	float: left;
	width: 210px;
}

#PmPostLeft input[type="submit"] {
	color: #fff;
	float: left;
	text-align: left;
	padding-left: 27px;
	font-weight: bold;
	font-family: arial;
	margin-top: 7px;
	width: 187px;
	height: 30px;
	background-color: #F89006;
	border: 1px solid #F0710A;
	border-radius: 3px;
	cursor: pointer;
	background-image: url("../images/icons/write.png");
	background-repeat: no-repeat;
	background-position: 5px 6px;
}

#PmDeleteAll button {
	float: right;
	width: 182px;
	height: 28px;
	font-size: 13px;
	font-family: arial;
	background-color: #fff;
	border: none;
	color: #666;
	cursor: pointer;
}

#search_friends {
	position: absolute;
	margin-top: -5px;
	background-color: #eee;
	border: 1px solid #bbb;
	width: 185px;
	border-radius: 4px;
	z-index: 1000;
	box-shadow: 0 0 5px rgba(0,0,0,0.3);
	display: none;
}

#friendsList UL.more {
	display: none;
}

#friendsList UL LI A {
	background-image: url("../images/icons/user-grey.png");
	background-repeat: no-repeat;
	background-position: 7px 5px;
	color: #4b4b4b;
	text-decoration: none;
	display: block;
	padding-top: 6px;
	padding-top: 7px\9;
	padding-left: 29px;
	height: 22px;
	height: 21px\9;
	border-bottom: 1px solid #ddd;
}

#friendsList UL LI A:hover {
	color: #373737;
	background-color: #ddd;
}

SPAN#MessageHead  {
	float: left;
	margin-bottom: 4px;
}
/* End private message */

/* Contact */
#ContactMessage {
	margin-left: -54px;
	width: 510px;
	height: 187px;
	margin-top: 4px;
	border-radius: 2px;
	border: 1px solid #bbb;
	padding: 5px;
	font-family: arial;
	font-size: 13px;
	color: #4b4b4b;
	resize: none;
}

#ContactHead {
	margin-left: -54px;
}
/* End contact */

/* Linkpartners */
.LinksHolder {
	float: left;
	width: 240px;
	margin-right: 6px;
	margin-left: 7px;
}

.LinksMenu, .LinksMenuFirst {
	float: left;
	width: 240px;
	margin-right: 7px;
	margin-bottom: 15px;
	background-color: #fff;
	border-radius: 8px;
}

.LinksMenuFirst {
	margin-left: -3px;
}

.LinksMenuTop {
	background: url("../images/content-top-tird.png");
	display: block;
	height: 36px;
	width: 240px;
}

.LinksMenuTop h1 {
	color: #fff;
	font-size: 16px;
	text-shadow: 0px 1px #B66F39;
	margin: 0px;
	padding-top: 8px;
	padding-left: 12px;
}

.LinksMenu UL, .LinksMenuFirst UL { 
	display: block;
	margin: 0px;
	padding: 0px;
	margin-top: 11px;
	margin-left: 13px;
	margin-bottom: 5px;
	float: left;
}

.LinksMenu UL LI, .LinksMenuFirst UL LI {
	margin-right: 8px;
	display: table-tr;
	list-style: none;
	width: 220px;
	height: 23px;
	overflow: hidden;
}

.LinksMenu UL LI A, .LinksMenuFirst UL LI A {
	display: block;
	background-image: url("../images/icons/arrow.png");
	background-repeat: no-repeat;
	background-position: -6px -1px;
	padding-left: 13px;
	color: #4b4b4b;
	width: 220px;
	text-decoration: none;
}

.LinksMenu UL LI A:hover, .LinksMenuFirst UL LI A:hover {
	color: #373737;
	background-image: url("../images/icons/arrow-hover.png");
}
/* End linkpartners */

/* Adwords logo */
#AdwordsLogo {
	position: absolute;
	margin-left: 338px;
}
/* End Adwords logo */

/* Namegen explain */
#NameExample {
	position: absolute;
	margin-top: -6px;
	margin-left: 530px;
}

.NamegenLine {
	border-top: 1px solid #666;
	width: 728px;
	height: 1px;
	margin-top: -5px;
	margin-bottom: 10px;
	margin-left: 12px;
}
/* End namegen explain */

/* E-Cards */
#EcardsTop {
	width: 451px;
	height: 24px;
	margin-left: -10px;
	margin-right: -10px;
	margin-top: -10px;
	margin-bottom: 10px;
	padding-left: 8px;
	padding-top: 7px;
	padding-top: 9px\9;
	font-weight: 700;
	font-size: 14px;
	color: #fff;
	background-color: #FF972D;
	border: 1px solid #FD7536;
	text-shadow: #b66f39 1px 1px 0;
}

#EcardEditorText {
	margin-bottom: 4px;
	font-weight: bold;
}

.EcardsLeft {
	float: left;
	width: 220px;
}

.EcardsRight {
	float: right;
	width: 190px;
	margin-left: 20px;
}

.EcardsLeftBottom {
	float: left;
	margin-top: 8px;
	width: 220px;
}

.EcardsRightBottom {
	float: right;
	margin-top: 8px;
	width: 190px;
	margin-left: 20px;
}

.EcardsLeftBottom .Captcha {
	float: left;
	margin-top: 4px;
	margin-left: -4px;
}

#EcardsHolder input[type="text"] {
	color: #30484c;
	padding-left: 3px;
	padding-top: 1px;
	margin-top: 4px;
	margin-bottom: 10px;
	width: 185px;
	height: 22px;
	border-radius: 2px;
	border: 1px solid #bbb;
}

#EcardsHolder input[type="submit"], #EcardsHolder input[type="submit"]#MailFriend, .EditTags input[type="submit"], .ContentBlockProfileAlbum input[type="submit"] {
	background-image: url("../images/icons/email-image.png");
	background-repeat: no-repeat;
	background-position: 7px 9px;
	background-color: #F89006;
	border: 1px solid #F0710A;
	border-radius: 3px;
	float: right;
	font-family: arial;
	font-weight: bold;
	font-size: 13px;
	text-align: right;
	color: #fff;
	padding-left: 27px;
	padding-top: -2px;
	padding-right: 10px;
	margin-top: 9px;
	width: 137px;
	height: 37px;
	cursor: pointer;
}

#PostLeft input[type="submit"], input#saveSettings[type="submit"], .RegisterButton input[type="submit"], #EditText input[type="submit"], input#ChangePw, #uTags input[type="submit"], #uTags input[type="submit"], #AddAlbum input[type="submit"], #CategoryForm input[type="submit"] {
	background-image: url("../images/icons/write.png");
	background-repeat: no-repeat;
	background-position: 5px 6px;
	color: #fff;
	float: left;
	text-align: left;
	padding-left: 27px;
	font-weight: bold;
	font-family: arial;
	margin-top: 11px;
	width: 187px;
	height: 30px;
	background-color: #F89006;
	border: 1px solid #F0710A;
	border-radius: 3px;
	cursor: pointer;
}

#AddAlbum input[type="submit"] {
	background-image: url("../images/icons/folder-add.png");
	background-position: 5px 4px;
	margin-top: 4px;
	margin-left: 8px;
	width: 165px;
	height: 28px;
}

#EditText input[type="submit"], input#ChangePw, #CategoryForm input[type="submit"], input#saveSettings[type="submit"] {
	background-image: url("../images/icons/accept.png");
	margin-bottom: 18px;
}

#CategoryForm input[type="submit"] {
	margin-top: 3px;
	margin-left: 4px;
	height: 28px;
}

.ContentBlockProfileAlbum input[type="submit"] {
	background-image: url("../images/icons/write.png");
	margin-right: 10px;
}

.RegisterButton input[type="submit"] {
	background-image: url("../images/icons/accept.png");
	margin-top: 24px;
	margin-right: 42px;
	width: 228px;
}

.EditTags input[type="submit"], #uTags input[type="submit"] {
	background-image: url("../images/icons/accept.png");
	text-align: left;
	margin-top: 12px;
	width: 127px;
}

#uTags input[type="submit"] {
	width: 200px;
	margin-bottom: 12px;
	margin-top: -2px;
}

.EcardMenu {
	float: right;
	background-color: #F3F9FC;
	padding-top: 12px;
	padding-left: 12px;
	width: 238px;
	margin-top: 5px;
	margin-right: 1px;
	border: 1px solid #CCC;
}

.EcardMenu SPAN {
	float: left;
	width: 200px;
	font-weight: bold;
	display: block;
	margin-bottom: 9px;
}

.EcardMenu UL {
	margin-top: 24px;
	margin-bottom: 2px;
}

.EcardMenu UL LI {
	color: #4b4b4b;
	text-decoration: none;
	display: block;
	height: 22px;
	cursor: pointer;
}

.EcardMenu UL LI A:hover {
	color: #5b5b5b;
	text-decoration: underline;
}

#eMessage {
	background-color: #FFF;
	float: left;
	width: 442px;
	overflow: hidden;
	margin-top: -4px;
	margin-bottom: 2px;
	padding: 12px;
	padding-bottom: 9px;
	border-bottom: 1px solid #CCC;
	border-left: 1px solid #CCC;
	border-right: 1px solid #CCC;
}
/* End E-Cards */

/* Pagenumbers */
#PageNumbers {
	float: left;
	width: 758px;
	margin-left: -2px;
	margin-top: -3px;
	margin-bottom: 12px;
}

#PageNumbers SPAN, #PageNumbers A, #PageNumbersCenter A {
	background-color: #ECECEC;
	padding: 7px 10px 7px 10px;
	border-radius: 5px;
	text-decoration: none;
	margin-left: 5px;
	font-weight: bold;
	color: #555;
	text-align: center;
	font-size: 12px;
	text-shadow: 0 1px 0 #FFFFFF;
}

#PageNumbers #Active {
	background-color: #DCDCDC;
	box-shadow: 0 1px 2px #777 inset;
	text-decoration: underline;
}

#PageNumbers A:hover {
	box-shadow: 0 1px 2px #777 inset;	
}

#PageNumbers .Left {
	float: left;
}

#PageNumbers .Right {
	float: right;
}

#PageNumbersCenter {
	float: left;
	width: 505px;
	height: 20px;
	margin-top: 6px;
	text-align: center;
}

#PageNumbers .Big {
	min-width: 66px;
}
/* End pagenumbers */

/* Mail to friend */
#FriendText {
	margin-top: 2px;
	width: 436px;
	float: left;
}

#EcardsHolder textarea#MailFriend {
	color: #787878;
	margin: 0px;
	float: left;
	padding: 0px;
	padding-left: 3px;
	padding-top: 3px;
	margin-top: 5px;
	width: 436px;
	height: 75px;
	border-radius: 3px;
	border: 1px solid #bbb;
	resize: none;
}
/* End mail to friend */

/* Name Generator */
#NamegenTop {
	width: 450px;
	height: 24px;
	margin-left: -10px;
	margin-right: -10px;
	margin-top: -10px;
	padding-left: 8px;
	padding-top: 7px;
	padding-top: 9px\9;
	font-weight: 700;
	font-size: 14px;
	color: #fff;
	background-color: #FF972D;
	border: 1px solid #FD7536;
	text-shadow: #b66f39 1px 1px 0;
}
/* End Name Generator */

/* Respect box */
.RespectBoxTop {
	width: 420px;
	height: 24px;
	margin-left: -10px;
	margin-right: -10px;
	margin-top: -10px;
	margin-bottom: 10px;
	padding-left: 8px;
	padding-top: 7px;
	padding-top: 9px\9;
	font-weight: 700;
	resize: none;
	font-size: 14px;
	color: #fff;
	background-color: #FF972D;
	border: 1px solid #FD7536;
	text-shadow: #b66f39 1px 1px 0;
}

.scrollBox {
	width: 410px;
	height: 501px;
	overflow-y: scroll;
}

.RespectBox UL {
	margin-top: 10px;
}

.RespectBox UL LI {
	display: table;
	position: relative;
	float: left;
	width: 100%;
	margin-bottom: 10px;
	border-bottom: 1px solid #E9E9E9;
	height: 62px;
}

.RespectBox UL LI BUTTON {
	margin-right: 10px;
	float: right;
	margin-top: 12px;
	font-size: 12px;
	color: #fff;
	font-family: arial;
	font-weight: bold;
	padding-top: 4px\9;
	width: 134px;
	height: 27px;
	border: 1px solid #FD7536;
	background-color: #FF972D;
}

.RespectBox UL LI BUTTON:hover {
	background-color: #F0710A;
}

.RespectBoxAvatar {
	float: left;
	height: 50px;
	width: 50px;
	border: 1px solid #777;
	padding: 1px;
}

.RespectBoxAvatar:hover {
	border: 1px solid #222;
}

.RespectBoxAvatar IMG {
	width: 50px;
	height: 50px;
}

.RespectBoxDetails {
	float: left;
	padding-left: 14px;
	padding-top: 17px;
}

.RespectBoxDetails A {
	text-decoration: none;
	color: #4b4b4b;
	font-weight: bold;
	font-size: 14px;
}

.Facebox {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 100;
	text-align: left;
}

.Facebox .Popup{
	position: relative;
	border: 6px solid rgba(0,0,0,0.5);
	border-radius: 5px;
}

.Facebox .Content {
	display: table;
	width: 370px;
	padding: 10px;
	background: #fff;
	border-radius: 4px;
}

.Facebox .Content > p:first-child{
	margin-top: 0;
}
.Facebox .Content > p:last-child{
	margin-bottom: 0;
}

.Facebox .Close{
	position: absolute;
	top: 6px;
	right: 6px;
	padding: 2px;
}
.Facebox .Close img{
	opacity: 0.3;
	border: none;
}
.Facebox .Close:hover img{
	opacity: 1.0;
}

.Facebox .Loading {
	text-align: center;
}

.Facebox .Image {
	text-align: center;
}

.FaceboxOverlay {
	position: fixed;
	top: 0px;
	left: 0px;
	height: 100%;
	width: 100%;
}

.FaceboxHide {
	z-index: -100;
}

.FaceboxOverlayBG {
	background-color: #000;
	z-index: 99;
}
/* End respect box */

/* Edit tags */
.TagImage {
	background-color: #EEE;
	margin-top: 10px;
	width: 386px;
	min-height: 110px;
	margin-bottom: 6px;
	text-align: center;
	padding: 12px;
}

.TagImage IMG {
	max-height: 350px;
	max-width: 384px;
}

.EditTag {
	width: 100%;
	height: 110px;
	margin-top: 5px;
	float: left;
}

.EditTags {
	font-size: 12px;
}

.EditTags textarea {
	color: #787878;
	margin: 0px;
	padding: 0px;
	padding-left: 3px;
	padding-top: 3px;
	margin-top: 12px;
	width: 268px;
	height: 32px;
	border-radius: 3px;
	border: 1px solid #ccc;
	resize: none;
	box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.15) inset;
}
/* End edit tags */

/* Codes images */
#ImageCodesContainer {
	width: 890px;
}

#ImageCodes {
	float: left;
	margin-top: 10px;
	margin-left: 10px;
	margin-bottom: -10px;
}

#ImageCodesText {
	width: 410px;
	margin-bottom: 12px;
}

#ImageCodes SPAN {
	height: 18px;
	color: #4b4b4b;
	display: block;
}

#ImageCodes textarea {
	border: 1px solid #bbb;
	color: #999;
	font-family: arial;
	font-size: 10pt;
	height: 55px;
	margin-bottom: 12px;
	padding: 4px 6px; 
	width: 395px;
	resize: none;
	overflow: hidden;
	line-height: 1.4em;
	box-shadow: inset 0 0 5px #ddd;
}

#ImageCodes i {
	margin-top: -4px;
}

#ImageCodes IMG {
	float: left;
	padding-right: 5px;
}

#ImageCodesLeft {
	width: 468px;
	float: left;
}

#ImageCodesTop {
	width: 900px;
	height: 24px;
	margin-left: -10px;
	margin-right: -10px;
	margin-top: -10px;
	padding-left: 8px;
	padding-top: 7px;
	padding-top: 9px\9;
	font-weight: 700;
	resize: none;
	font-size: 14px;
	color: #fff;
	background-color: #FF972D;
	border: 1px solid #FD7536;
	text-shadow: #b66f39 1px 1px 0;
}

#ImageCodesImage *, #ImageCodesImage * {
	vertical-align: middle;
}

#ImageCodesImage SPAN, #ImageCodesImage SPAN {
	display: inline-block;
	height: 100%;
	margin: 0px;
	padding: 0px;
	width: 1px;
}

#ImageCodesImage {
	float: left;
	background-color: #eee;
	margin-top: 12px;
	width: 442px;
	height: 409px;
	height: 402px\9;
	margin-bottom: -7px;
	text-align: center;
	padding: 12px;
	border: 1px solid #ccc;
}

#ImageCodesImage IMG {
	max-height: 378px;
	max-width: 422px;
}
/* End codes images */

/* Respect bar */
.ContentBlock UL.respect LI {
	float: left;
	width: 50px;
	border: 1px solid #000;
}

.MessageRight .respect {
	float: right;
	position: absolute;
	display: none;
}

.MessageRight .respect BUTTON {
	background-image: url("../images/icons/respect.png");
	background-repeat: no-repeat;
	background-position: 5px 5px;
	background-color: #fff;
	margin-top: -6px;
	font-family: arial;
	width: 106px;
	height: 28px;
	border: none;
	margin-left: 504px;
	color: #4b4b4b;
	cursor: pointer;
	padding-left: 22px;
	vertical-align: top;
	z-index: 100;
}

.MessageRight P {
	width: 100%;
	padding: 0;
}

.MessageRight IMG {
	border: 0;
	max-width: 600px;
}

.Trashcan SPAN {
	background-image: url("../images/icons/trashcan.png");
	width: 16px;
	height: 16px;
}

.respects {
	margin-top: 0px;
	padding-bottom: 2px;
}

.respects UL {
	margin-top: 12px;
	margin-left: 7px; 
}

.respects UL LI {
	float: left;
	margin-left: 5.5px;
	margin-bottom: 9px;
	width: 51px;
	height: 51px;
	background-color: #aaa;
}

.respects IMG {
	margin-right: 5px;
	width: 51px;
	height: 51px;
}

.Trashcan BUTTON {
	background-image: url("../images/icons/trash.png");
	background-repeat: no-repeat;
	background-position: 0px 0px;
	background-color: transparent;
	position: absolute;
	width: 16px;
	height: 16px;
	border: none;
	margin-left: 40px;
	margin-top: -6px;
	cursor: pointer;
}
/* End respects box */

/* Forum status box */
.StatusTitle {
	width: 390px;
	height: 20px;
	margin-top: 10px;
	font-weight: bold;
	border-bottom: 1px solid #696969;
}

.StatusOverview {
	width: 390px;
	height: 20px;
	padding-top: 5px;
	padding-bottom: 3px;
	border-bottom: 1px solid #CCC;
}

.StatusOverview IMG {
	margin-left: -20px;
	position: absolute;
}

.StatusTitle .Status {
	float: left;
	width: 170px;
}

.StatusOverview .Status {
	float: left;
	margin-left: 20px;
	width: 150px;
}

.StatusTitle .Messages, .StatusOverview .Messages {
	width: 80px;
	position: absolute;
	margin-left: 25px;
}

.StatusTitle .Respects, .StatusOverview .Respects {
	float: right;
	width: 80px;
}
/* End forum status box */

/* Berichten */
#PostRight {
	float: right;
	width: 544px;
	margin-bottom: 6px;
}

#PostLeft {
	float: left;
	width: 210px;
}

#PostLeft input[type="text"], #PmPostLeft input[type="text"], input[type="text"].Contact {
	color: #30484c;
	padding-left: 3px;
	padding-top: 1px;
	margin-top: 4px;
	margin-bottom: 10px;
	width: 182px;
	height: 22px;
	border-radius: 2px;
	border: 1px solid #bbb;
}

input[type="text"]#Captcha {
	width: 100px;
	height: 22px;
	float: left;
	margin-right: 9px;
}

#PostLeft .Captcha, #PmPostLeft .Captcha {
	margin-top: 4px;
	float: left;
}

#PostLeft input[type="submit"]:hover, #uTags input[type="submit"]:hover, input[type="submit"]#TextGen:hover, #EditText input[type="submit"]:hover, input#ChangePw:hover, .ContentBlockProfileAlbum input[type="submit"]:hover, #AddAlbum input[type="submit"]:hover, #CategoryForm input[type="submit"]:hover, #Search button[type="submit"]:hover, .EditTags input[type="submit"]:hover, .ImageCodes input[type="submit"]:hover, .RegisterButton input[type="submit"]:hover, #ContentBlockProfileTags #Right input[type="submit"]:hover, #PmPostLeft input[type="submit"]:hover, #EcardsHolder input[type="submit"]:hover, #EcardsHolder input[type="submit"]#MailFriend:hover, #ContentBlockProfileTags #Right input.Tagroulator[type="submit"]:hover, #ContentBlockProfileTags #Right input.Skip[type="submit"]:hover {
	background-color: #F0710A;
}

#PostLeft span {
	color: #aaa;
}

.MessageLeft {
	float: left;
	width: 130px;
	margin-bottom: 13px;
}

.MessageRight {
	border-left: 1px solid #aaa;
	float: right;
	width: 595px;
	overflow: hidden;
	padding-left: 12px;
	margin-right: 16px;
	margin-bottom: 13px;
	min-height: 100px;
}

.MessageLeft IMG {
	width: 98px;
	height: 98px;
	padding: 1px;
	border: 1px solid #6c6c6c;
}

.MessageLeft IMG a:hover {
	border: 1px solid #333;
}

SPAN.Message {
	font-size: 11px;
	float: left;
	width: 743px;
	height: 15px;
	text-align: right;
	margin-bottom: 6px;
}

SPAN.PostDate {
	margin-left: 14px;
	float: left;
}

SPAN.re {
	float: right;
}

.Message IMG {
	width: 11px;
	height: 11px;
	margin-bottom: -1px;
}

.Message A, #DetailImageInfo A, .GameCollom SPAN A, .Chat p a, #ForumAddTopic A, .MemberInfo A, .GameCollom UL LI A, #LoginStatus A, #AllNews A, #BestUploaders .Item A, #AlbumOverview UL LI A {
	text-decoration: none;
	color: #4b4b4b;
}

.Message A:hover {
	text-decoration: underline;
	color: #4b4b4b;
}
/* End berichten */

/* Register */
.Register {
	float: left;
	padding-left: 12px;
	padding-bottom: 12px;
	width: 270px;
}

.RegisterIcon {
	position: absolute;
}

.RegisterText {
	margin-left: 22px;
	margin-bottom: 12px;
}

.Register input[type="text"], .Register input[type="password"] {
	color: #787878;
	padding-left: 4px;
	padding-top: 1px;
	margin-top: 4px;
	width: 220px;
	height: 22px;
	border-radius: 3px;
	border: 1px solid #ccc;
	box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.15) inset;
}

#RegisterGender {
	color: #787878;
	margin-top: 5px;
	width: 226px;
	border-radius: 3px;
	border: 1px solid #ccc;
}

.RegisterBirthdate {
	color: #787878;
	margin-top: 5px;
	width: 73px;
	border-radius: 3px;
	border: 1px solid #ccc;
}

.RegisterCheck {
	position: absolute;
	margin-top: 8px;
	margin-left: 6px;
}

.RegisterPolicy {
	position: absolute;
	float: left;
	margin-top: 32px;
	font-size: 11px;
	margin-left: 18px;
}

.NewsLetter {
	position: absolute;
	float: left;
	margin-top: 14px;
	font-size: 11px;
	margin-left: 18px;
}

.NewsLetter input[type="checkbox"], .RegisterPolicy input[type="checkbox"]{
	position: absolute;
	margin-top: 0px;
	margin-top: -3px\9;
	margin-left: -17px;
	margin-left: -22px\9;
}

#RegisterHelper {
	background-color: #FFEA87;
	float: right;
	margin-bottom: 12px;
	margin-top: 5px;
	margin-right: 14px;
	margin-right: 2px\9;
	padding: 10px;
	width: 152px;
	height: 144px;
	border: 1px solid #D8880C;
}

#RegisterHelper #RegisterInfoHead {
	font-weight: bold;
	width: 150px;
	margin-top: -2px;
	margin-left: 20px;
}

#RegisterHelper IMG {
	position: absolute;
	margin-left: -2px;
}

#RegisterHelper #RegisterInfo {
	float: left;
	margin-top: 6px;
}

.Register #Captcha {
	margin-top: 16px;
}

/* End register */

/* Images overview */
#ImagesOverviewUpload {
	float: right;
	width: 200px;
	height: 200px;
}

#ImagesOverviewInfo H1 {
	font-weight: bold;
	color: #4b4b4b;
	margin: 0px;
	margin-bottom: 6px;
	margin-left: 12px;
	padding: 0px;
	background-image: none;
	width: auto;
	height: auto;
	font-size: 18pt;
	text-shadow: none;	
}

#ImagesOverview {
	padding: 0px;
	padding-left: 9px;
}

ul#ImagesOverview {
	float: left;
	height: 100%;
	margin-bottom: 5px;
	margin-top: -4px;
}

#ImagesOverview li {
	text-align: center;
	vertical-align: middle;
	list-style: none;
	width: 135px;
	height: 150px;
	float: left;
	margin-right: 5px;
	margin-left: 5px;
	margin-bottom: 10px;
	background-color: #f0f0f0;
	border-bottom: 1px solid #ccc;
	border-left: 1px solid #ccc;
	border-right: 1px solid #ccc;
	border-radius: 5px;
}

#ImagesOverview li:hover {
	border-bottom: 1px solid #999;
	border-left: 1px solid #999;
	border-right: 1px solid #999;
}

#ImagesOverview LI IMG {
	border: 0px;
}

#ImagesOverview LI.Big {
	width: 234px;
	height: 250px;
}

#ImagesOverview LI:hover {
	background-color: #e2e2e2;
}

#ImagesOverview *, #ImagesOverviewBig * {
	vertical-align: middle;
}

#ImagesOverview SPAN, #ImagesOverviewBig SPAN {
	display: inline-block;
	height: 100%;
	margin: 0px;
	padding: 0px;
	width: 1px;
}

#ImagesOverview .ThumbImage {
	display: block;
	margin-top: 28px;
	width: 135px;
	height: 121px;
}

#ImagesOverview .ThumbImageBig {
	display: block;
	margin-top: 28px;
	width: 235px;
	height: 221px;
}

#ImagesOverview .ThumbImage IMG {
	padding: 7px;
	max-width: 120px;
	max-height: 107px;
}

#ImagesOverview .Big IMG {
	padding: 7px;
	max-width: 210px;
	max-height: 195px;
}

.ImagesOverviewButtons {
	float: left;
	height: 16px;
	margin-left: -1px;
	background-color: #FF9D35;
	padding: 5px;
	width: 125px;
	border: 1px solid #FF7819;
	border-radius: 5px 5px 0px 0px;
}

.ImagesOverviewButtons i {
	margin-top: -3px;
}

.ImagesOverviewButtonsBig {
	float: left;
	height: 26px;
	margin-left: -1px;
	background-color: #FF9D35;
	padding: 0px;
	width: 220px;
	color: #fff;
	padding-right: 14px;
	border: 1px solid #FF7819;
	border-radius: 5px;
}

.ImagesOverviewButtonsBig A {
	display: block;
	float: left;
	margin-left: 5px;
	width: 16px;
	height: 16px;
	margin-top: 3px;
	margin-right: 3px;
}

.fHeadText {
	font-weight: bold;
	color: #fff;
	margin-top: 4px;
}

#fSaveAs {
	float: left;
	border: 1px solid #ccc;
	margin-left: 12px;
	text-align: center;
	margin-bottom: 12px;
	background-color: #e4e4e4;
	width: 708px;
	padding: 10px;
}

#fTextBlock {
	width: 708px;
	padding: 10px;
	float: left;
	background-color: #eee;
	margin-top: -4px;
	margin-left: 12px;
	margin-bottom: 12px;
	border: 1px solid #ccc;
}

#fForm {
	margin-left: 12px;
	float: left;
}

.ImageButtonsRight {
	float: right;
	margin-right: -7px;
}

.ImageButtonsRightBig {
	float: right;
	margin-right: -14px;
}

#ImagesOverviewInfo {
	position: relative;
	display: block;
	float: left;
	width: 728px;
	min-height: 46px;
	margin-left: 12px;
	margin-bottom: 12px;
}

#ImagesOverviewInfoText {
	float: left;
	width: 515px;
}

#iOverviewAdBetween {
	float: left;
	margin-left: 4px;
	margin-bottom: 10px;
}

#ImageSort {
	position: absolute;
	float: right;
	margin-left: 548px;
}

#ImageSortSearch {
	position: absolute;
	float: right;
	margin-left: 498px;
	margin-top: -76px
}

#ImagePP, #ImagePPSearch {
	position: absolute;
	float: right;
	margin-left: 659px;
	margin-bottom: 12px;
}

#ImagePPSearch {
	margin-top: -76px;
}

#ImagePP SELECT, #ImagePPSearch SELECT {
	width: 80px;
}

#ImageSortSearch SELECT {
	width: 150px;
}

#ImagePP SELECT, #ImagePPSearch SELECT, #ImageSort SELECT, #ImageSortSearch SELECT {
	margin-top: 3px;
	padding: 3px;
	color: #777;
	border: 1px solid #ccc;
}
/* End images overview */

/* Images detail */
.DetailLeft {
	float: left;
	margin-left: 12px;
	margin-bottom: 12px;
	width: 468px;
}

.DetailLeft H1 {
	font-weight: bold;
	color: #4b4b4b;
	margin: 0px;
	margin-bottom: 6px;
	padding: 0px;
	background-image: none;
	width: auto;
	height: 29px;
	font-size: 18pt;
	text-shadow: none;
	overflow: hidden;
}

.DetailRight {
	float: right;
	width: 250px;
	margin-right: 12px;
	margin-bottom: 12px;
}

#DetailInfo {
	color: #505050;
	margin-bottom: 12px;
}

#DetailInfo A {
	color: #1C90AD;
	text-decoration: none;
}

.DetailAdsBig {
	float: left;
	width: 728px;
	height: 90px;
	margin-left: 12px;
	padding: 0px;
}

#DetailSuggestT {
	float: left;
	width: 711px;
	height: 20px;
	margin-left: 12px;
	margin-top: 12px;
	padding: 6px 8px 4px;
	overflow: hidden;
	background-color: #FF962B;
	border: 1px solid #FF8918;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;	
	font-size: 14px;
	font-weight: bold;
	color: #fff;
}

#DetailSuggest {
	float: left;
	display: block;
	border: 1px solid #b0b0b0;
	border-top: 0px;
	width: 707px;
	padding: 10px;
	margin-bottom: 4px;
	margin-left: 12px;
	height: 84px;
}

ul#Suggestions {
	margin-left: -5px;
	margin-top: 2px;
}

#DetailAdBlock {
	float: right;
	margin-top: 12px;
	margin-right: 2px;
	margin-bottom: -3px;
}

.DetailImageTop, .DetailRightTop {
	float: left;
	width: 448px;
	height: 20px;
	margin-top: 12px;
	padding-left: 8px;
	padding-right: 8px;
	padding-top: 6px;
	padding-bottom: 4px;
	overflow: hidden;
	background-color: #FF962B;
	border: 1px solid #FF8918;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;	
	font-size: 14px;
	font-weight: bold;
	color: #fff;
}

.DetailRightTop {
	width: 232px;
	margin-left: -2px;
}

.DetailImageTop a {
	font-weight: bold;
	color: #fff;
	text-decoration: none;
}

.DetailImageTop i {
	margin-top: -2px;
}

#DetailUploader {
	float: left;
	width: 248px;
	height: 146px;
	border: 1px solid #b0b0b0;
	border-top: 0px;
	border-bottom: 0px;
	margin-left: -2px;
}

.dUploader {
	float: left;
	height: 56px;
	width: 232px;
	padding: 8px;
	border-bottom: 1px solid #ccc;
}

.dUploader IMG {
	float: left;
	background-color: #fff;
	height: 50px;
	width: 50px;
	border: 1px solid #ccc;
	padding: 1px;
}

.dTop {
	float: left;
	margin-left: 6px;
	margin-right: 6px;
	color: #4b4b4b;
	font-size: 12px;
}

.dTop A {
	text-decoration: none;
}

.dTop A:hover {
	text-decoration: underline;
}

.dText, .dTextNone {
	float: left;
	margin-top: 9px;
	margin-left: 6px;
	margin-right: 4px;
	font-size: 12px;
	width: 166px;
	height: 28px;
	color: #999;
	overflow: hidden;
}

.dText {
	height: 20px;
}

.dTextNone, .dTextNone a {
	font-size: 11px;
	margin-top: 10px;
	color: #999;
	text-decoration: none;
}

.dTextNone a:hover {
	text-decoration: underline;
}

.dUploader:hover {
	background-color: #eee;
}

#DetailImage * {
	vertical-align: middle;
}

#DetailImage SPAN {
	display: inline-block;
	height: 288px;
	margin: 0px;
	padding: 0px;
	width: 1px;
}

#DetailImage {
	float: left;
	display: block;
	text-align: center;
	border: 1px solid #b0b0b0;
	border-top: 0px;
	width: 444px;
	padding: 10px;
	margin-bottom: 4px;
	min-height: 385px;
	height: 100%;
}

#DetailImage IMG {
	margin-top: 4px;
	max-height: 451px;
	max-width: 424px;
}

.dAsk {
	float: left;
	padding: 10px;
	margin-bottom: 1px;
	margin-left: 12px;
	margin-top: 12px;
	width: 707px;
	border: 1px solid #FACF19;
	background: #fbfde9;
}

#DetailMenu {
	float: left;
	background-color: #eee;
	padding-top: 8px;
	padding-left: 8px;
	width: 240px;
	margin-left: -2px;
	border: 1px solid #b0b0b0;
	border-top: 0px;
}

#DetailMenu IMG {
	position: absolute;
}

#DetailMenu UL LI {
	height: 27px;
}

#DetailMenu UL LI A {
	color: #4b4b4b;
	text-decoration: none;	
	width: 100%;
}

#DetailMenu UL LI i {
	margin-top: -2px;
}

#DetailMenu span#iLike {
	float: left;
}

#DetailMenu UL LI A:hover {
	color: #5b5b5b;
	text-decoration: underline;
}

#DetailImageInfo {
	background-color: #F3F9FC;
	float: left;
	width: 436px;
	padding: 15px;
	padding-bottom: 9px;
	margin-top: 10px;
	border: 1px solid #CCC;
}

#DetailImageInfo SPAN {
	margin-right: 6px;
	color: #0F7B96;
	font-size: 11pt;
	font-weight: bold;
}

#DetailImageInfo P {
	padding-left: 0px;
	margin-bottom: 5px;
	width: 434px;
}

#DetailCodes {
	background-color: #FFF;
	float: left;
	width: 444px;
	padding: 10px;
	padding-bottom: 5px;
	border-bottom: 1px solid #b0b0b0;
	border-left: 1px solid #b0b0b0;
	border-right: 1px solid #b0b0b0;
}

#DetailCodes SPAN {
	float: left;
	margin-left: -1px;
	margin-top: 2px;
	margin-top: 3px\9;
}

textarea#HyvesD, textarea#UBBD, textarea#HTMLD, textarea#URLD {
	border-color: #b0b0b0;
	border-style: solid;
	border-width: 1px;
	color: #999;
	font-family: arial;
	font-size: 10pt;
	height: 35px;
	padding: 4px 6px;
	width: 430px;
	margin-bottom: 7px;
	resize: none;
	overflow: hidden;
	line-height: 1.35em;
	box-shadow: inset 0 0 5px #ddd;
}

#ShareButtons {
	margin-top: 2px;
	float: right;
	width: 140px;
}

#ShareButtons SPAN {
	border: 1px solid #FF600D;
	border-radius: 4px;
}

#hub_badge {
	float: left;
	margin-left: -1px;
}

#PrintButton BUTTON {
	width: 214px;
	height: 16px;
	font-size: 13px;
	font-family: arial;
	background-color: #eee;
	border: none;
	color: #4b4b4b;
	cursor: pointer;
	text-align: left;
	padding: 0px;
	margin-left: 2px;
	margin-top: 2px;
	margin-bottom: 10px;
}

#PrintButton BUTTON::-moz-focus-inner {
	border: 0;
	padding: 0;
}

#HyvesPromotion {
	width: 258px;
	margin-left: -9px;
	margin-top: 4px;
	height: 350px;
	border: 0px;
}
/* End images detail */

/* Games */
.GameCollom SPAN.More {
	display: block;
	width: 728px;
	margin: 0px 0px 12px 12px;
	text-align: right;
}

.GameCollom UL {
	margin-left: 13px;
}  

.GameCollom UL LI {
	float: left;
	height: 52px;
	width: 175px;
	margin: 0px 0px 10px 0px;
	border-right: 10px solid #fff;
}

.GameCollom UL LI A {
	font-weight: bold;
}

.GameCollom UL LI:hover {
	background-color: #eee;
}

.GameCollom UL LI .GameLeft {
	float: left;
	width: 60px;
}

.GameCollom UL LI .GameLeft IMG {
	border: 1px solid #4B4B4B;
}

.GameCollom UL LI .GameRight {
	float: left;
}

.GameCollom UL LI .GameRight A {
	display: block;
	width: 100px;
	height: 17px;
	overflow: hidden;
}

.GameCollom UL LI .GameRight SPAN {
	display: block;
	float: left;
	width: 100px;
	height: 20px;
	color: #888;
}

#GameOutput {
	margin-left: 12px;
	margin-bottom: 12px;
}
/* End games */

/* Notification bar */
.jquery-notify-bar {
	width: 100%;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 32768;
	background-color: #efefef;
	font-size: 18px;
	color: #000;
	text-align: center;
	font-family: Arial, Verdana, sans-serif;
	padding: 20px 0px;
	border-bottom: 1px solid #bbb;
}

.jquery-notify-bar.error {
	color: #f00;
	background-color: #fdd;
}

.jquery-notify-bar.success {
	color: #060;
	background-color: #BBFFB6;
}

.notify-bar-close {
	position: absolute;
	left: 95%;
	font-size: 11px;
}
/* End notification bar */

/* Forum */
#ForumAddTopic {
	background-image: url("../images/icons/topic-add.png");
	background-repeat: no-repeat;
	background-position: 0px 5px;
	padding-top: 6px;
	padding-left: 22px;
	margin-left: 12px;
	width: 420px;
	height: 22px;
	float: left;
}

#ForumTotals {
	float: right;
	margin-top: 7px;
	margin-right: 16px;
	font-color: #4b4b4b;
	text-decoration: none;
	font-size: 12px;
	margin-bottom: 12px;
}

.MemberInfo {
	width: 108px;
	height: auto;
	margin-top: -8px;
	margin-left: 13px;
	font-size: 8pt;
}

.MemberInfo IMG {
	width: 10px;
	height: 10px;
	border: none;
}

.MemberInfo SPAN.stat {
	margin-left: 3px;
}

.Forum {
	width: 730px;
	margin-left: 12px;
}

.Forum A {
	color: #4b4b4b;
	font-weight: bold;
	text-decoration: none;
}

.ForumLeft A {
	font-weight: normal;
}

.ForumTopics1 A, .ForumTopics2 A {
	font-weight: normal;
}

.ForumTop TD {
	color: #fff;
	font-weight: bold;
	padding: 8px;
	height: 12px;
	background-color: #FF9B33;
	border: 1px solid #FF7C00;
}

.Forum1 TD {
	padding: 8px;
	height: 32px;
	background-color: #efefef;
}

.Forum1 TD:hover, .ForumTopics1:hover {
	background-color: #e4e4e4;
}

.Forum2 TD {
	padding: 8px;
	height: 32px;
	background-color: #fff;
}

.Forum2 TD:hover {
	background-color: #f8f8f8;
}

.ForumLeft {
	font-size: 8pt;
}

.ForumLastReaction SPAN {
	font-size: 8pt;
	margin-left: -20px;
	text-align: left;
}

.ForumTopics1 TD {
	border: 1px solid #dedede;
	background-color: #f6f6f6;
	padding: 8px 0px 8px 28px;
	height: 48px;
	vertical-align: middle;
}

.ForumTopics2 TD {
	padding: 8px 0px 8px 28px;
	height: 48px;
}

.ForumTopics1 IMG, .ForumTopics2 IMG {
	margin-left: -22px;
	position: absolute;
}

.Quote {
	width: 577px;
	font-style: italic;
	padding: 10px;
	margin-top: 12px;
	background-color: #e2f8fe;
	border: 1px solid #9ee8fd;
}

.QuoteButton BUTTON {
	width: 36px;
	height: 14px;
	margin-top: -1px;
	font-size: 11px;
	font-family: arial;
	background-color: #fff;
	border: none;
	color: #4b4b4b;
	cursor: pointer;
}
/* End forum */

/* Dropdown menu */
#LoginStatus {
	display: none;
	position: absolute;
	z-index: 1000;
	background-color: #fff;
	width: 100px;
	text-align: left;
	padding: 8px;
	margin-top: -26px;
	margin-left: 125px;
	border-radius: 5px;
	box-shadow: 0 0 5px rgba(0,0,0,0.5);
}

#LoginStatus H1 {
	font-size: 14px;
	padding-left: 5px;
	padding-top: 4px;
	font-weight: bold;
	width: 109px;
	margin: -8px;
	margin-bottom: 8px;
	border-top-right-radius: 4px;
	border-top-left-radius: 4px;
	height: 21px;
	color: #fff;
	background-color: #F89006;
	border: 1px solid #F0710A;
}

#LoginStatus A {
	margin-left: 16px;
}

#LoginStatus a img {
	position: absolute;
	margin-left: -20px;
	margin-left: -36px\9;
	margin-top: -1px;
	cursor: pointer;
	border: 0;
}
/* End dropdown menu */

/* Profile */
.ContentBlockProfileInfo, .ProfileGB .Content, #ContentBlockProfileTags, #CBTags {
	float: left;
	margin-top: 8px;
	vertical-align: middle;
	background-color: #fff;
	width: 405px;
	border-radius: 7px;
	margin-bottom: 15px;
	margin-left: 3px;
}
#ContentBlockProfileTags, #CBTags {
	min-height: 203px;
}
#ContentBlockProfileTags {
	background: #fff url('../images/icons/loading.gif') center center no-repeat;
}

#CBTags P {
	margin-left: 10px;
}

.ContentBlockProfileAlbum {
	float: left;
	margin-top: 8px;
	vertical-align: middle;
	background-color: #fff;
	width: 405px;
	min-height: 224px;
	border-radius: 7px;
	margin-bottom: 15px;
	margin-left: 3px;
}

.ContentBlockProfileAlbum #Secure {
	float: left;
	margin-left: 10px;
	height: 56px;
}

#ContentBlockLU SPAN, ul#Suggestions SPAN {
	display: inline-block;
	height: 100%;
	margin: 0px;
	margin-top: -3px;
	padding: 0px;
	width: 1px;
}

ul#Suggestions SPAN {
	margin-left: -4px;
}

#ContentBlockLU P, ul#Suggestions P {
	margin-left: 10px;
	margin-top: -2px;
}

#ContentBlockLU *, ul#Suggestions * {
	vertical-align: middle;
}

.ContentBlockProfileFriends {
	position: relative;
	z-index: 10;
	float: right;
	margin-top: 8px;
	background-color: #fff;
	height: 420px;
	height: 418px\9;
	width: 336px;
	border-radius: 7px;
	margin-left: 10px;
	margin-right: 2px;
}

.ContentBlockProfileFriends .Invites {
	float: right;
	font-size: 13px;
	width: 100px;
	margin-top: -29px;
	color: #fff;
}

.ContentBlockProfileFriends UL {
	float: left;
	margin-left: 9px;
	height: 360px;
	width: 324px;
}

.ContentBlockProfileFriends UL LI {
	text-align: center;
	width: 92px;
	height: 109px;
	float: left;
	margin-left: 4px;
	margin-right: 12px;
	margin-bottom: 7px;
}

.ContentBlockProfileFriends UL LI A, .ContentBlockProfileFriends SPAN A {
	font-size: 10pt;
	font-family: arial;
	color: #4b4b4b;
	text-decoration: none;
}

.ContentBlockProfileFriends H1 SPAN, .ContentBlockProfileFriends SPAN {
	float: right;
	text-align: right;
	width: 330px;
	margin-right: 15px;
	margin-bottom: 3px;
	margin-top: 11px;
}

.ContentBlockProfileFriends SPAN {
	margin-top: -8px;
}

.ContentBlockProfileFriends A IMG {
	float: left;
	width: 90px;
	height: 90px;
	border: 1px solid #aaa;
	padding: 1px;
}

.ContentBlockProfileFriends A IMG:hover {
	border: 1px solid #555;
}

span#Invites IMG {
	position: absolute;
	margin-left: -112px;
	margin-top: -29px;
}

#ContentBlockLU {
	float: right;
	margin-top: 8px;
	background-color: #fff;
	height: 123px;
	width: 754px;
	border-radius: 7px;
	margin-left: 10px;
	margin-right: 2px;
	margin-bottom: 15px;
	padding-bottom: 5px;
}

#ContentBlockProfileTags #Left {
	float: left;
	width: 148px;
	margin-left: 10px;
}

#ContentBlockProfileTags #Right {
	float: right;
	width: 211px;
	margin-right: 10px;
}

#ContentBlockProfileTags #Right textarea {
	color: #939393;
	width: 200px;
	margin: 0px;
	padding: 3px;
	height: 81px;
	resize: none;
	border-radius: 3px;
	border: 1px solid #ccc;
}

#ContentBlockProfileTags #Right input[type="submit"].Tagroulator, #ContentBlockProfileTags #Right input[type="submit"].Skip {
	background-color: #F89006;
	border: 1px solid #F0710A;
	border-radius: 4px;
	color: #fff;
	font-weight: bold;
	font-family: arial;
	font-size: 12px;
	margin-right: 0px;
	margin-top: 4px;
	width: 102px;
	height: 28px;
	cursor: pointer;
}

#ContentBlockProfileTags #Right input[type="submit"].Skip {
	margin-right: 3px;
}

#tText {
	float: left;
	width: 215px;
	margin-top: 2px;
	font-size: 10px;
}

#ContentBlockProfileTags #Left #TagImage * {
	vertical-align: middle;
}

#ContentBlockProfileTags #Left #TagImage SPAN {
	display: inline-block;
	height: 100%;
	margin: 0px;
	padding: 0px;
	margin-top: -1px;
	width: 1px;
}

#ContentBlockProfileTags #Left #TagImage {
	background-color: #F0F0F0;
	border: 1px solid #ccc;
	width: 160px;
	height: 148px;
	text-align: center;
}

#ContentBlockProfileTags H1 img {
	float: right;
	margin-right: 10px;
	margin-top: 2px;
}

#TagImage IMG {
	padding: 5px;
	max-height: 130px;
	max-width: 130px;
}

.ContentBlockProfileInfo H1, .ContentBlockProfileAlbum H1, .ProfileGB H1, #ContentBlockProfileTags H1, #WebshopInfo H1, #CBTags H1 {
	background-image: url("../images/content-top-profile-info.png");
	background-color: #fff;
	border-top-left-radius: 7px;
	border-top-right-radius: 7px;
	margin: 0px;
	margin-top: -8px;
	padding-top: 8px;
	padding-top: 10px\9;
	padding-left: 12px;
	width: 393px;
	height: 28px;
	height: 26px\9;
	color: #fff;
	font-size: 16px;
	text-shadow: 0px 1px #b66f39;
	margin-bottom: 13px;
}

.ContentBlockProfileAlbum input[type="text"] {
	float: left;
	width: 100px;
	height: 22px;
	border-radius: 2px;
	color: #30484c;
	border: 1px solid #bbb;
	margin-right: 9px;
	margin-top: 3px;
	padding-left: 3px;

}

.ContentBlockProfileAlbum .Captcha {
	margin-top: 3px;
}

.ContentBlockProfileAlbum H1 .AddCat {
	float: right;
	font-size: 10pt;
	color: #fff;
	text-decoration: none;
	padding-top: 2px;
	margin-right: 3px;		
}

.ContentBlockProfileAlbum H1 .AddCat IMG {
	float: right;
	border: none;
	margin-left: 5px;
	margin-top: 1px;
}

.ContentBlockProfileAlbum SPAN#Left {
	float: left;
	width: 225px;
	margin-left: 12px;
	margin-bottom: 8px;
	font-size: 12px;
	margin-top: -6px;
}

.ContentBlockProfileAlbum SPAN#Right {
	float: right;
	text-align: right;
	margin-right: 15px;
	margin-bottom: 8px;
	margin-top: -6px;
	font-size: 12px;
	width: 125px;
}

.ContentBlockProfileAlbum SPAN#Right A, .ContentBlockProfileInfo A {
	text-decoration: none;
}

.ContentBlockProfileFriends H1 {
	background-image: url("../images/content-top-profile-tagroulator.png");
	background-color: #fff;
	border-top-left-radius: 7px;
	border-top-right-radius: 7px;
	margin: 0px;
	padding: 0px;
	margin-top: -8px;
	padding-top: 8px;
	padding-top: 10px\9;
	padding-left: 12px;
	width: 324px;
	height: 28px;
	height: 26px\9;
	color: #fff;
	font-size: 16px;
	text-shadow: 0px 1px #b66f39;
	margin-bottom: 13px;
}

.ContentBlockProfileInfo H1 IMG, #WebshopInfo H1 IMG, #WebshopPoints H1 IMG, .ContentBlockProfileAlbum H1 IMG, #ContentBlockLU H1 IMG, .ProfileGB H1 IMG, #CBTags H1 IMG {
	float: left;
	border: none;
	margin-top: 2px;
	margin-right: 8px;
}

.ContentBlockProfileInfo P, .ProfileGB .Content P, #WebshopInfo P {
	margin: 0px;
	padding-left: 13px;
	margin-bottom: 13px;
	width: 358px;
}

.ContentBlockProfileAlbum P {
	margin: 0px;
	padding-left: 11px;
	margin-bottom: 6px;
	width: 358px;
}

#ProfileText {
	background-color: #fff;
	border-radius: 7px;
	width: 730px;
	padding: 12px;
	margin-top: -2px;
	margin-right: 2px;
	margin-bottom: 12px;
	float: right;
}

#ProfileInfoLeft {
	float: left;
	padding-left: 12px;
	padding-bottom: 12px;
	font-size: 11px;
	text-align: left;
	width: 114px;
	height: 119px;
	margin-bottom: 12px;
}

#ProfileInfoLeft IMG {
	border: 1px solid #aaa;
	width: 98px;
	height: 98px;
	margin-bottom: 3px;
	padding: 1px;
}

#ProfileInfoRight {
	float: left;
	text-align: left;
	margin-top: -6px;
	margin-left: 4px;
	margin-bottom: 12px;
	width: 222px;
}

.ProfileInfoTitle {
	border-bottom: 1px solid #747474;
	font-weight: bold;
	height: 20px;
	margin-top: 12px;
	width: 258px;
}

.ProfileInfoItem {
	height: 12px;
	padding-bottom: 3px;
	padding-top: 4px;
	width: 263px;
}

.ProfileInfoTextLeft {
	float: left;
	width: 145px;
}

#ContentBlockLU UL {
	margin-left: 7px;
	padding-bottom: 6px;
}

#ContentBlockLU LI, .ContentBlockProfileAlbum LI, ul#Suggestions LI {
	float: left;
	background-color: #F0F0F0;
	text-align: center;
	border: 1px solid #ccc;
	margin-left: 6px;
	margin-right: 3px;
	height: 71px;
	width: 71px;
	vertical-align: middle; 
}

ul#Suggestions LI {
	height: 78px;
	width: 78px;
}

#ContentBlockLU LI:hover, ul#Suggestions LI:hover {
	background-color: #ddd;
	border: 1px solid #777;
}

#ContentBlockLU LI IMG, ul#Suggestions LI IMG {
	border: 0;
	max-height: 64px;
	max-width: 64px;
}

.ContentBlockProfileAlbum UL {
	margin-left: 6px;
	padding-bottom: 2px;
}

.ContentBlockProfileAlbum LI {
	margin-bottom: 10px;
	margin-right: 0px;
	background-color: #fff;
}

.ContentBlockProfileAlbum LI:hover {
	border: 1px solid #555;
}

.ContentBlockProfileAlbum LI IMG {
	height: 68px;
	width: 67px;
	padding: 1px;
	border: none;
}
/* End profile */

/* Accept friend invites */
#InviteAccept {
	width: 100%;
	float: left;
}

.InviteAccept {
	width: 248px;
	float: left;
	height: 92px;
}

.InviteAccept IMG {
	width: 75px;
	height: 75px;
	float: left;
	border: 1px solid #aaa;
	padding: 1px;
	margin-left: 12px;	
	margin-right: 8px;
}

.InviteAccept IMG:hover {
	border: 1px solid #555;
}

.InviteAccept SPAN {
	display: block;
	float: left;
	font-weight: bold;
	font-size: 15px;
	margin-bottom: 5px;
	width: 148px;
}

.InviteAccept INPUT {
	float: left;
	margin-left: -2px;
}

.InviteAccept LABEL {
	float: left;
	line-height: 20px;
	margin-left: 2px;
	width: 120px;
	text-align: left;
	font-size: 12px;
}
/* End accept friend invites */

/* Friends overview */
#FriendsOverview {
	float: left;
	width: 100%;
}

#FriendsOverview UL {
	float: left;
	height: auto;
	margin-left: 1px;
	margin-top: 1px;
}

#FriendsOverview UL LI {
	float: left;
	margin-right: 15px;
	margin-left: 15px;
	width: 95px;
	text-align: center;
	height: 130px;
}

#FriendsOverview UL LI A {
	text-decoration: none;
}

#FriendsOverview UL LI IMG {
	border: none;
	width: 93px;
	height: 93px;
	padding: 1px;
	border: 1px solid #ddd;
}
/* End friends overview */

/* News */
#NewsItem {
	margin-left: 13px;
	width: 726px;
	min-height: 130px;
	margin-bottom: 13px;
}

#NewsLeft {
	float: left;
	color: #aaa;
	width: 110px;
	text-align: right;
	padding-right: 10px;
}

#NewsLeft A {
	color: #116F80;
	text-decoration: none;
}

#NewsLeft A:hover, #NewsRight SPAN A:hover {
	color: #116F80;
	text-decoration: underline;
}

#NewsRight {
	display: table-tr;
	float: right;
	padding-left: 10px;
	width: 592px;
	border-left: 1px solid #bbb;
}

#NewsRight H2 A {
	color: #116F80;
	float: left;
	width: 580px;
	height: 22px;
	font-size: 11pt;
	margin-bottom: 7px;
	text-shadow: none;
	text-decoration: none;
}

#NewsRight SPAN A {
	display: block;
	margin-top: 5px;
	color: #116F80;
	font-size: 8pt;
	text-decoration: none;
	float: right;
}

#AllNews {
	float: left;
	margin-top: 13px;
	margin-bottom: 10px;
	width: 726px;
	text-align: right;
}

#AllNews A {
	font-size: 9pt;
}
/* End news */

/* Trending topics */
#TrendingTopics, #oUsers {
	float: right;
	background-color: #fff;
	width: 426px;
	border-radius: 7px;
	margin-left: 3px;
	margin-right: 2px;
	margin-bottom: 15px;
	margin-top: 8px;
}

#TrendingTopics H1, #oUsers H1 {
	background-image: url("../images/content-top-trending-new.png");
	background-color: #fff;
	border-top-left-radius: 7px;
	border-top-right-radius: 7px;
	margin: 0px;
	padding-left: 12px;
	width: 414px;
	height: 28px;
	color: #fff;
	padding-top: 8px;
	margin-top: -8px;
	font-size: 16px;
	text-shadow: 0px 1px #b66f39;
	margin-bottom: 13px;
}

#TrendingTopics UL {
	margin-top: -12px;
}

#TrendingTopics UL LI {
	float: left;
	width: 400px;
	height: 44px;
	margin-left: 8px;
	margin-top: 8px;
	border-bottom: 1px solid #ccc;
}

#TrendingTopics UL LI .tAdded {
	float: right;
	color: #969696;
	margin-top: -15px;
}

#TrendingTopics UL LI .tCat a {
	float: left;
	color: #969696;
	margin-top: 2px;
	margin-left: 6px;
	text-decoration: none;
}

#TrendingTopics UL LI .tCat a:hover {
	text-decoration: underline;
}

#TrendingTopics UL LI .tUser {
	float: right;
	margin-top: -17px;
}

#TrendingTopics UL LI .tUser A {
	text-decoration: none;
}

#TrendingTopics UL LI .tUser A:hover, #TrendingTopics UL LI .tTitle:hover {
	text-decoration: underline;
}

#TrendingTopics UL LI .tTitle {
	float: left;
	margin-left: 6px;
	color: #555;
	text-decoration: none;
	font-weight: bold;
	display: block;
}

#TrendingTopics UL LI .tAvatar IMG {
	float: left;
	width: 32px;
	height: 32px;
	border: 1px solid #ccc;
	border-radius: 2px;
	padding: 1px;
}

#TrendingTopics UL LI .tTitle A:hover {
	color: #373737;
	text-decoration: underline;
}
/* End trending topics */

/* Online Users */
#oUsers UL {
	float: left;
	margin-top: -4px;
	margin-bottom: 4px;
}

#oUsers UL LI {
	float: left;
	width: 134px;
	height: 34px;
	margin-left: 6px;
}

#oUsers span i {
	float: left;
	margin-left: 8px;
	margin-bottom: 6px;
}

#oUsers UL LI .Username {
	float: left;
	margin-left: 4px;
	margin-top: 6px;
	text-decoration: none;
}

#oUsers UL LI .Username:hover {
	text-decoration: underline;
}

#oUsers UL LI IMG {
	float: left;
	padding: 1px;
	border: 1px solid #ccc;
	border-radius: 2px;
	height: 25px;
	width: 25px;
}
/* End online Users */

/* Icon spirtes */
.icon {
	background-image: url("../images/icons.png");
	padding: 0px;
	height: 22px;
	width: 22px;
	display: inline-block;
	background-repeat: no-repeat;
	margin-right: 3px;
	margin-top: -1px;
	margin-left: -4px;
	float: left;
}

.icon-book {
	background-position: 0 0px;
}
.icon-folder {
	background-position: 0 -23px;
}
.icon-clock {
	background-position: -1px -45px;
}
.icon-comment {
	background-position: 0 -66px;
}
.icon-topic {
	background-position: 2px -85px;
	margin-left: 1px;
	position: absolute;
}
.icon-searcharrow {
	background-position: -4px -110px;
	background-position: -4px -112px\9;
	margin-right: 8px;
	float: right;
}
.icon-landde {
	background-position: 0 -132px;
}
.icon-landnl {
	background-position: 0 -154px;
}
.icon-landus {
	background-position: 0 -176px;
}
.icon-landes {
	background-position: 1px -199px;
}
.icon-landfr {
	background-position: 3px -221px;
}
.icon-status1 {
	background-position: 0 -244px;
}
.icon-status2 {
	background-position: 0 -266px;
}
.icon-status3 {
	background-position: 0 -288px;
}
.icon-status4 {
	background-position: 0 -310px;
}
.icon-bestup {
	background-position: 0 -330px;
}
.icon-image {
	background-position: 0 -352px;
}
.icon-iedit {
	background-position: 0 -441px;
}
.icon-iadd {
	background-position: 0 -463px;
}
.icon-ubb {
	background-position: 0 -484px;
}
.icon-hyves {
	background-position: 0 -506px;
}
.icon-html {
	background-position: 0 -528px;
}
.icon-ilink {
	background-position: 0 -550px;
}
.icon-palette {
	background-position: 0 -572px;
}
.icon-disk {
	background-position: 0 -594px;
}
.icon-email {
	background-position: 0 -616px;
}
.icon-emaili {
	background-position: 0 -638px;
}
.icon-print {
	background-position: 0 -726px;
}
.icon-edit {
	background-position: 0 -748px;
}
.icon-tags {
	background-position: 0 -770px;
}
.icon-user {
	background-position: 0 -792px;
}
.icon-userfemale {
	background-position: 0 -814px;
}
.icon-usergrey {
	background-position: 0 -836px;
}
.icon-userregister {
	background-position: 0 -858px;
}
.icon-friends {
	background-position: 0 -880px;
}
.icon-forum {
	background-position: 0 -902px;
}
.icon-trash {
	background-position: 0 -924px;
}
.icon-error {
	background-position: 0 -946px;
}
.icon-settings {
	background-position: 0 -968px;
}
.icon-games {
	background-position: 0 -990px;
}
.icon-images {
	background-position: 0 -1012px;
}
.icon-help {
	background-position: 0 -1034px;
}
.icon-paint {
	background-position: 0 -1056px;
}
.icon-cart {
	background-position: 0 -1078px;
}
.icon-coins {
	background-position: 0 -1100px;
}
.icon-info {
	background-position: 0 -1122px;
}
.icon-respect {
	background-position: 0 -1144px;
}
/* End icon spirtes */

/* Ads */
#AdsHome {
	float: left;
	background-color: #fff;
	border-radius: 7px;
	margin-left: 11px;
	margin-bottom: 12px;
	width: 405px;
	height: 92px;
	padding: 10px;
}

.AdBetween {
	float: left;
	margin-top: -4px;
	margin-left: 3px;
	width: 730px;
	height: 90px;
	padding: 12px;
	border-radius: 7px;
	margin-bottom: 10px;
}
/* End Ads */

/* Best uploaders */
#BestUploaders {
	float: left;
	margin-top: 8px;
	background-color: #fff;
	width: 418px;
	border-radius: 7px;
	margin-left: 3px;
	margin-right: 10px;
	margin-bottom: 15px;
	padding-left: 7px;
	padding-bottom: 0px;
}

#BestUploaders H1 {
	background-image: url("../images/content-top-bestuploaders.png");
	background-color: #fff;
	border-top-left-radius: 7px;
	border-top-right-radius: 7px;
	margin: 0px;
	margin-top: -8px;
	margin-left: -7px;
	padding-top: 8px;
	padding-left: 12px;
	width: 413px;
	height: 28px;
	color: #fff;
	font-size: 16px;
	text-shadow: 0px 1px #b66f39;
	margin-bottom: 13px;
}

#BestUploaders #ItemHolder {
	padding-top: 5px;
}

#BestUploaders .Item {
	float: left;
	margin-left: 11px;
	width: 189px;
	height: 67px;
}

#BestUploaders IMG.Avatar {
	width: 50px;
	height: 50px;
	border: 1px solid #555;
}

#BestUploaders SPAN.Rank {
	position: absolute;
	background-image: url("../images/icons/star.png");
	font-size: 11px;
	font-weight: bold;
	margin-top: -12px;
	margin-left: -68px;
	width: 32px;
	height: 32px;
	text-align: center;
	line-height: 30px;
}

#BestUploaders SPAN[rel~="10"] {
	padding-left: 10px;
}

#BestUploaders SPAN.Username {
	position: absolute;
	margin-left: 6px;
}

#BestUploaders SPAN.Points {
	position: absolute;
	margin-top: 18px;
	color: #aaa;
	margin-left: 6px;
}
/* End best uploaders */

/* Best Uploaders */
.bUploaders, .lActive {
	float: left;
	margin-top: 8px;
	background-color: #fff;
	width: 316px;
	border-radius: 7px;
	margin-left: 2px;
	margin-bottom: 15px;
	padding-bottom: 5px;
}

.bUploaders H1, .lActive H1 {
	background-image: url("../images/content-top-trending.png");
	background-color: #fff;
	border-top-left-radius: 7px;
	border-top-right-radius: 7px;
	margin: 0px;
	padding-left: 12px;
	width: 304px;
	height: 28px;
	color: #fff;
	padding-top: 8px;
	margin-top: -8px;
	font-size: 16px;
	text-shadow: 0px 1px #b66f39;
	margin-bottom: 13px;
}

.bUploaders UL {
	margin-top: -11px;
}

.bUploaders UL LI {
	float: left;
	display: block;
}

.bUploaders UL LI SPAN {
	float: right;
	color: #999;
	margin-right: 9px;
	margin-top: -25px;
}

.bUploaders UL LI:hover {
	background-color: #E5E5E5;
}

.bUploaders UL LI .BG:hover {
	background-color: #ddd;
}

.bUploaders UL LI .BG {
	background-color: #eee;
}

.bUploaders UL LI A {
	color: #4b4b4b;
	text-decoration: none;
	display: block;
	padding-top: 9px;
	padding-top: 10px\9;
	padding-left: 40px;
	height: 25px;
	height: 24px\9;
	width: 276px;
}

.bUploaders ul li a:hover {
	text-decoration: underline;
}

.bUploaders UL LI IMG {
	position: absolute;
	margin-left: 5px;
	margin-top: 4px;
	width: 22px;
	height: 22px;
	border: 1px solid #bbb;
	padding: 1px;
	border-radius: 2px;
}
/* End best uploaders */

/* Last active */
.lActive ul li img {
	float: left;
	width: 22px;
	height: 22px;
	border: 1px solid #bbb;
	padding: 1px;
	border-radius: 2px;
}

.lActive ul {
	margin-top: -10px;
	margin-bottom: 2px;
}

.lActive ul li {
	float: left;
	margin-left: 2px;
	margin-bottom: 2px;
	width: 150px;
	height: 30px;
}

.lActive ul li a {
	float: left;
	margin-left: 4px;
	margin-top: 4px;
	text-decoration: none;
}

.lActive ul li a span {
	position: absolute;
	margin-left: 4px;
	margin-top: 4px;
}

.lActive ul li a span:hover {
	float: left;
	text-decoration: underline;
}
/* End last active */

/* Advertisement home */
#HomeAds {
	float: left;
	margin-top: 8px;
	background-color: #fff;
	width: 316px;
	height: 292px;
	border-radius: 7px;
	margin-left: 3px;
	margin-right: 2px;
	margin-bottom: 15px;
	padding-bottom: 5px;
}

#HomeAds H1 {
	background-image: url("../images/content-top-trending.png");
	background-color: #fff;
	border-top-left-radius: 7px;
	border-top-right-radius: 7px;
	margin: 0px;
	margin-top: -8px;
	padding-top: 8px;
	padding-top: 10px\9;
	padding-left: 12px;
	width: 304px;
	height: 28px;
	height: 26px\9;
	color: #fff;
	font-size: 16px;
	text-shadow: 0px 1px #b66f39;
	margin-bottom: 13px;
}
/* End advertisement home */


/* Home left and right */
#HomeLeft {
	float: left;
	width: 320px;
}

#HomeRight {
	float: right;
	width: 439px;
}
/* End home left and right */

/* Webshop */
#WebshopInfo {
	float: left;
	margin-top: 8px;
	vertical-align: middle;
	background-color: #fff;
	width: 405px;
	height: 195px;
	border-radius: 7px;
	margin-bottom: 15px;
	margin-left: 3px;
}

#WebshopPoints {
	position: relative;
	z-index: 10;
	float: right;
	margin-top: 8px;
	background-color: #fff;
	width: 324px;
	border-radius: 7px;
	margin-left: 10px;
	margin-right: 2px;
	margin-bottom: 15px;
	padding-bottom: 5px;
	padding-left: 12px;
}

#WebshopPoints H1 {
	background-image: url("../images/content-top-profile-tagroulator.png");
	background-color: #fff;
	border-top-left-radius: 7px;
	border-top-right-radius: 7px;
	margin: 0px;
	margin-top: -8px;
	margin-left: -12px;
	padding-top: 8px;
	padding-top: 10px\9;
	padding-left: 12px;
	width: 324px;
	height: 28px;
	height: 26px\9;
	color: #fff;
	font-size: 16px;
	text-shadow: 0px 1px #b66f39;
	margin-bottom: 13px;
}

#WebshopLeft {
	float: left;
	width: 30px;
	margin-top: 10px;
}

#WebshopLeft i {
	margin-top: -4px;
}

#WebshopLeft SPAN {
	float: left;
	width: 300px;
	height: 21px;
	font-weight: bold;
}

#WebshopRight {
	float: right;
	width: 270px;
	margin-top: 10px;
}

#WebshopRight SPAN {
	float: left;
	width: 270px;
	height: 21px;
}

.WebshopItem {
	float: left;
	width: 171px;
	height: 160px;
	margin-left: 12px;
	margin-bottom: 12px;
	border: 1px solid #aaa;
	padding-top: 12px;
	margin-top: 14px;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
}

.WebshopItemTop {
	width: 163px;
	height: 24px;
	background-color: #FF9B33;
	margin-top: -24px;
	padding-top: 5px;
	padding-left: 8px;
	border-top-right-radius: 4px;
	border-top-left-radius: 4px;
	border: 1px solid #FF7819;
	margin-left: -1px;
	font-weight: bold;
	color: #fff;
}

.WebshopItem .Image IMG {
	max-height: 100px;
	width: 160px;
	text-align: center;
	margin-top: 6px;
	margin-left: 6px;
	border: none;
}

.WebshopItem .Order, .WebshopItem .Points {
	position: absolute;
	margin-top: 128px;
	margin-left: -161px;
}

.WebshopItem .Order {
	width: 165px;
}

.WebshopItem .Order A {
	text-decoration: none;
}

.WebshopItem .Order .Disable, .WebshopItem .Image .Disable {
	color: #CC636E;
	cursor: default;
	border: none;
}

.WebshopItem .Points  {
	margin-top: 108px;
	margin-left: -161px;
}
/* End webshop */

/* Mail settings */
#MailSettings {
	float: left;
	margin: 12px;
	margin-top: 0px;
	height: 100%;
}

#MailSettings #Top {
	font-weight: bold;
}

#MailSettings #Top SPAN.w {
	float: left;
	width: 300px;
	margin-top: 20px;
	margin-bottom: 2px;
}

#MailSettings .Item {
	float: left;
}

#MailSettings .Item SPAN.w {
	float: left;
	width: 300px;
	margin-top: 3px;
}

#MailSettings #Top SPAN.opt1, #MailSettings #Top SPAN.opt2 {
	float: left;
	width: 100px;
	text-align: left;
	margin-bottom: 2px;
	margin-top: 20px;
}

#MailSettings .Item SPAN.opt1, #MailSettings .Item SPAN.opt2 {
	float: left;
	width: 68px;
	margin-top: 3px;
	margin-left: 10px;
	margin-right: 20px;
	text-align: left;
}

#MailSettings .Item SPAN.optc1, #MailSettings .Item SPAN.optc2 {
	float: left;
	width: 60px;
	margin-top: 3px;
	margin-left: 20px;
	margin-right: 20px;
	text-align: left;
}
/* End mail settings */

/* Profile settings */
input.ChangePw {
	color: #30484c;
	padding-left: 3px;
	padding-top: 1px;
	margin-top: 4px;
	margin-bottom: 15px;
	width: 182px;
	height: 22px;
	border-radius: 2px;
	border: 1px solid #bbb;
}

textarea#inviteLink {
	color: #666;
	margin: 0px;
	float: left;
	padding: 5px;
	font-family: arial;
	font-size: 13px;
	margin-top: 8px;
	width: 716px;
	height: 16px;
	margin-bottom: 10px;
	border: 1px solid #aaa;
	resize: none;
	font-style: italic;
}

textarea#inviteLinkp {
	color: #666;
	margin: 0px;
	float: left;
	padding: 5px;
	font-family: arial;
	font-size: 13px;
	margin-top: 8px;
	width: 716px;
	height: 16px;
	margin-bottom: 10px;
	border: 1px solid #FACF19;
	background: #fbfde9;
	resize: none;
	box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.15) inset;
}

#ChangeAvatar {
	position: absolute;
	margin-left: 638px;
	margin-top: -130px;
}

#ChangeAvatar SPAN {
	margin-bottom: 2px;
	font-size: 11px;
}

#ChangeAvatar IMG {
	border: 1px solid #777;
	width: 100px;
	height: 100px;
	padding: 1px;
}

.sItem {
	border: 1px solid #ccc;
	float: left;
	margin-left: 10px;
	margin-bottom: 10px;
	height: 85px;
}

.sItem img {
	border: 0;
}

.sItem:hover {
	border: 1px solid #777;
}

.sItem a {
	width: 360px;
	height: 85px;
	float: left;
}

.sItem a:hover {
	background-color: #efefef;
}

.sItemHead {
	position: absolute;
	margin-left: 3px;
	margin-top: 8px;
	font-weight: bold;
	font-size: 15px;
	vertical-align: top;
}

.sItemText {
	position: absolute;
	width: 272px;
	margin-left: 4px;
	margin-top: 32px;
	vertical-align: top;
	max-height: 52px;
	overflow: hidden;
}

.sItem img {
	width: 75px;
	height: 75px;
	padding: 5px;
}
/* End profile settings */

/* Videos */
.VideoItem {
	float: left;
	width: 173px;
	height: 148px;
	margin-left: 12px;
	margin-bottom: 12px;
	box-shadow: 0 0 2px rgba(0,0,0,0.35);
}

.VideoItemTop {
	width: 157px;
	padding-left: 8px;
	padding-right: 8px;
	padding-top: 5px;
	color: #fff;
	background-color: #FE8A29;
	height: 23px;
	font-weight: bold;
	overflow-y: hidden;
}

.VideoItem .Thumbnail {
	width: 173px;
	height: 120px;
}

#VideoSearch {
	float: left;
	width: 190px;
	background-color: #fff;
	padding-left: 10px;
	padding-top: 8px;
}

#VideoSearch input[type="text"] {
	float: left;
	color: #4b4b4b;
	padding-left: 5px;
	margin-top: 4px;
	margin-bottom: 2px;
	width: 174px;
	height: 24px;
	border-radius: 3px;
	border: 1px solid #999;
	box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.15) inset;
}
/* Videos */

/* Edit photoalbum */
#AlbumOverview {
	float: right;
	background-color: #fff;
	width: 744px;
	margin-top: 8px;
	margin-bottom: 15px;
	margin-right: 2px;
	padding-left: 10px;
	border-radius: 7px;	
}

#AlbumOverview H1 {
	background-image: url("../images/content-top.png");
	background-color: #fff;
	border-radius: 7px;
	margin: 0px;
	margin-top: -8px;
	margin-left: -10px;
	padding-top: 8px;
	padding-top: 10px\9;
	padding-left: 12px;
	width: 742px;
	height: 28px;
	height: 26px\9;
	color: #fff;
	font-size: 16px;
	text-shadow: 0px 1px #b66f39;
	margin-bottom: 13px;
}

#AlbumOverview H1 IMG {
	float: left;
	border: none;
	margin-top: 2px;
	margin-right: 9px;
}

#AlbumOverview H1 SPAN.Buttons {
	float: right;
	margin-right: -1px;
}

#AlbumOverview H1 SPAN.Buttons IMG {
	border: none;
	height: 16px;
	width: 16px;
	margin-left: 5px;
	margin-top: -1px\9;
	float: right;
}

#AlbumOverview H1 SPAN A {
	float: right;
	font-size: 10pt;
	width: 146px; /* Chrome */
	color: #fff;
	text-decoration: none;
	padding-top: 2px;
	margin-right: 3px;
}

#AlbumOverview H2 {
	width: 730px;
	margin-top: -5px;
	margin-left: 2px;
	border-bottom: 2px solid #aaa;
}

#AlbumOverview H2 A, #AlbumOverviewInfo A, #AlbumMenu A {
	text-decoration: none;
}

#AlbumOverview H2 SPAN.Buttons {
	float: right;
	margin-right: -4px;
}

#AlbumOverview H2 SPAN.Buttons IMG {
	border: none;
	height: 16px;
	width: 16px;
	margin-top: 1px;
	float: right;
}

#AlbumOverview H2 SPAN A {
	float: right;
	font-size: 10pt;
	color: #555;
	text-decoration: none;
	padding-top: 4px;
	margin-right: 3px;
}

#AlbumOverview UL {
	width: 745px;
	display: table;
	margin-top: -5px;
	margin-bottom: 5px;
	margin-left: -10px;
}

#AlbumOverview UL LI {
	display: table-tr;
	text-align: center;
	width: 111px;
	height: 132px;
	float: left;
	margin-left: 12px;
	margin-bottom: 10px;
}

#AlbumOverview UL LI A {
	font-size: 12px;
}

#AlbumOverview UL LI BUTTON.Del {
	background: transparent url("../images/icons/trash.png");
	background-repeat: no-repeat;
	background-position: 0px 0px;
	width: 16px;
	height: 16px;
	position: absolute;
	border: none;
	cursor: pointer;
	margin-top: 4px;
	margin-left: -18px;
}

#AlbumOverview UL LI BUTTON.Name {
	background: transparent url("../images/icons/tags.png");
	background-repeat: no-repeat;
	background-position: 0px 0px;
	width: 16px;
	height: 16px;
	position: absolute;
	border: none;
	cursor: pointer;
	margin-top: 4px;
	margin-left: -36px;
}

#AlbumOverview .Info {
	float: left;
	width: 100%;
	background-color: #eee;
	border-left: 1px solid #aaa;
	border-right: 1px solid #aaa;
	border-bottom: 1px solid #aaa;
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
}

#AlbumOverview .Info SPAN.Respects {
	float: left;
	margin: 0px;
	margin-top: 2px;
	font-size: 11px;
	padding-left: 0px;
	text-align: left;
	padding-left: 18px;
	width: 22px;
	height: 16px;
}

#AlbumOverview .Info SPAN.Reactions {
	float: right;
	text-align: right;
	margin: 0px;
	margin-top: 2px;
	font-size: 11px;
	padding-left: 18px;
	margin-right: 4px;
	width: 22px;
	height: 16px;
}

#AlbumOverview .Info SPAN IMG {
	position: absolute;
	margin-left: -15px;
	margin-top: 1px;
	width: 12px;
	height: 12px;
}

#AlbumOverview A IMG {
	float: left;
	width: 111px;
	height: 111px;
	border: 1px solid #aaa;
}

#AlbumOverview A IMG:hover {
	border: 1px solid #555;
}

#AlbumInfo {
	float: left;
	margin-top: -14px;
	margin-bottom: 18px;
	width: 100%;
}

#AlbumOverviewInfo {
	float: left;
	margin-top: -4px;
	margin-left: 2px;
	margin-bottom: 14px;
	width: 709px;
	padding-left: 20px;
}

#AlbumOverviewInfo SPAN.InfoRight {
	float: right;
	padding-right: 20px;
}

#AlbumOverviewInfo SPAN.InfoRight IMG {
	position: absolute;
	margin-left: 5px;
}

#AlbumOverviewInfo IMG {
	position: absolute;
	margin-left: -20px;
}

#AlbumOverview UL SPAN.InfoLeft {
	float: left;
	margin-left: 12px;
	margin-top: 8px;
	font-size: 12px;
	width: 340px;
}

#AlbumOverview UL SPAN.InfoLeft A {
	text-decoration: none;
}

#AlbumOverview UL SPAN.InfoRight {
	float: right;
	margin-left: 12px;
	margin-top: 8px;
	margin-right: 5px;
	font-size: 12px;
	width: 340px;
	text-align: right;
}

#AlbumOverview SPAN#AddPhoto {
	float: right;
	background-image: url("../images/icons/add.png");
	background-repeat: no-repeat;
	background-position: 386px 6px;
	margin-bottom: 8px;
	border-top: 1px solid #ccc;
	padding-top: 6px;
	margin-right: 15px;
	text-align: right;
	width: 505px;
	height: 18px;
}

#AlbumOverview SPAN#AddPhoto A {
	font-family: arial;
	font-size: 13px;
}

#AddAlbum #Text {
	float: left;
	margin-top: 10px;
	width: 400px;
	font-weight: bold;
}

#AddAlbum input[type="text"] {
	float: left;
	color: #4b4b4b;
	padding-left: 8px;
	margin-top: 4px;
	margin-bottom: 2px;
	width: 165px;
	height: 24px;
	border-radius: 5px;
	border: 1px solid #D3D3D3;
	box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.15) inset;
}

#AlbumOverview P {
	margin-left: 2px;
	margin-top: -8px;
	padding-bottom: 15px;
	height: 20px;
	color: #666;
}
/* End edit photoalbum */

/* Photoalbum detail */
#AlbumDetail {
	float: right;
	background-color: #fff;
	width: 744px;
	height: 416px;
	margin-top: 8px;
	margin-bottom: 15px;
	margin-right: 2px;
	padding-left: 10px;
	border-radius: 7px;	
}

#AlbumDetail H1 {
	background-image: url("../images/content-top.png");
	background-color: #fff;
	border-radius: 7px;
	margin: 0px;
	margin-top: -8px;
	margin-left: -10px;
	padding-top: 8px;
	padding-top: 10px\9;
	padding-left: 12px;
	width: 742px;
	height: 28px;
	height: 26px\9;
	color: #fff;
	font-size: 16px;
	text-shadow: 0px 1px #b66f39;
	margin-bottom: 13px;
}

#AlbumDetail H1 A {
	color: #fff;
	text-decoration: none;
}

#AlbumImage {
	float: left;
	text-align: center;
	border: 1px solid #CCC;
	width: 467px;
	margin-top: 2px;
	margin-bottom: 12px;
	height: 293px;
}

#AlbumImage #controls {
	background-color: #ccc;
	padding: 5px;
	height: 17px;
}

#AlbumImage #controls A {
	text-decoration: none;
}

#AlbumImage #controls .next {
	float: right;
}	

#AlbumImage #controls .prev {
	float: left;
}	

#AlbumImage #slideshow {
	position: relative;
}

#AlbumImage #slideshow span.image-wrapper {
	display: block;
	position: absolute;
	top: 0;
	left: 0;
}

#AlbumImage #slideshow span.image-wrapper BUTTON {
	background-image: url("../images/icons/respect.png");
	background-repeat: no-repeat;
	background-position: 5px 5px;
	background-color: #ccc;
	margin-top: -28px;
	margin-left: -78px;
	font-family: arial;
	position: absolute;
	width: 160px;
	height: 28px;
	border: none;
	color: #4b4b4b;
	cursor: pointer;
	padding-left: 22px;
	vertical-align: top;
	z-index: 100;
}

#AlbumImage #slideshow a.advance-link {
	display: table-cell;
	text-decoration: none;
	display: block;
	width: 467px;
	height: 265px;
	text-align: center;
	z-index: 1;
}

#AlbumImage #slideshow img {
	vertical-align: middle;
	padding: 10px;
	max-height: 247px;
	max-width: 467px;
}

#AlbumImage #slideshow span.image-wrapper SPAN {
	display: inline-block;
	height: 100%;
	margin: 0px;
	padding: 0px;
	width: 1px;
}

#AlbumImage #slideshow span.image-wrapper * {
	vertical-align: middle;
}

#AlbumImage .respect BUTTON {
	background-image: url("../images/icons/respect.png");
	background-repeat: no-repeat;
	background-position: 5px 5px;
	background-color: #fff;
	margin-top: -6px;
	font-family: arial;
	position: absolute;
	width: 106px;
	height: 28px;
	border: none;
	margin-left: 80px;
	color: #4b4b4b;
	cursor: pointer;
	padding-left: 22px;
	vertical-align: top;
	z-index: 100;
}

.caption-container {
	position: relative;
	float: left;
	margin-left: 5px;
	width: 754px;
}

.caption {
	display: inline;
	position: absolute;
	margin-top: 272px;
	margin-left: -6px;
	padding: 5px;
	padding-left: 27px;
	text-align: left;
	border: 1px solid #ccc;
	width: 435px;
	left: 0px;
}

.caption IMG {
	position: absolute;
	margin-left: -22px;
	margin-top: 1px;
}

.caption a {
	text-decoration: none;
}

#AlbumMenu {
	float: right;
	background-color: #F3F9FC;
	margin-top: 2px;
	padding-top: 12px;
	padding-left: 12px;
	width: 238px;
	min-height: 349px;
	border: 1px solid #CCC;
	margin-right: 12px;
	margin-bottom: 12px;	
}

#AlbumMenu .pagination {
	float: left;
	display: block;
	width: 225px;
	height: 24px;
}

#AlbumMenu .pagination a, #AlbumMenu .pagination span.current, #AlbumMenu .pagination span.ellipsis {
	display: block;
	float: left;
	margin-right: 2px;
	padding: 4px 7px 2px 7px;
	border: 1px solid #ccc;
}

#AlbumMenu .pagination a:hover {
	background-color: #eee;
	text-decoration: none;
}

#AlbumMenu .pagination span.current {
	font-weight: bold;
	background-color: #000;
	border-color: #000;
	color: #fff;
}

#AlbumMenu .pagination span.ellipsis {
	border: none;
	padding: 5px 0 3px 2px;
}

#AlbumMenu SPAN#Left {
	float: left;
	width: 100px;
	font-weight: normal;
}

#AlbumMenu SPAN#Right {
	float: right;
	width: 93px;
	text-align: right;
	font-weight: normal;
	padding-right: 7px;
}

#AlbumMenu IMG {
	position: absolute;
}

#AlbumMenu SPAN {
	font-weight: bold;
	display: block;
	margin-bottom: 9px;
}

#AlbumMenu UL {
	margin-bottom: 8px;
	padding-bottom: 8px;
	margin-left: -8px;
}

#AlbumMenu UL LI {
	float: left;
	width: 69px;
	height: 69px;
	margin-left: 8px;
	margin-bottom: 10px;
}

#AlbumMenu UL LI IMG {
	width: 69px;
	height: 69px;
	border: 1px solid #aaa;
}

#AlbumMenu UL LI IMG:hover, #AlbumMenu UL LI.selected A IMG {
	border: 1px solid #555;
}

#AlbumMenu UL LI A:hover {
	color: #5b5b5b;
	text-decoration: underline;
}
/* End photoalbum detail */

/* Text generator */
.errorContainer {
	position: relative;
	margin: auto;
	width: 99%;
	padding: 5px;
	color: #ff0000;
}

.contentContainer {
	position: relative;
	margin: auto;
	width: 99%;
}

.resultContainer {
	position: relative;
	margin: auto;
	width: 99%;
	background: #F0F0F0;
	border: 1px solid #B5B5B5;
	border-radius: 10px;
	padding: 5px;
}

.optionsMenu {
	position: absolute;
	top: 0;
	left: 0;
	width: 300px;
	background: #F0F0F0;
	border: 1px solid #B5B5B5;
	border-radius: 10px;
	padding: 5px;
}

.createContainer {
	position: relative;
	width: 100%;
	text-align: center;
}

img.selected {
	outline: 2px solid #777;
	padding: 5px;
	background: #ffffff;
}

.editZone
{
	float: left;
	position: relative;
	padding: 0;
	background: #ffffff;
	overflow: hidden;
	left: 14px;
	margin-bottom: 14px;
}

.uploadSource
{
	z-index: 0;
	position: absolute;
	top: 0;
	left: 0; 
	padding: 0;
}

.uploadDragTool
{
	z-index: 2;
	position: absolute;
	top: 0;
	left: 0;
	border: 1px solid #3399ff; 
}

.dragHandle
{
	position: absolute;
	width: 9px;
	height: 9px;
}

.handleTop
{
	top: -5px;
}

.handleMid
{
	top: 50%;
	margin-top: -5px;
}

.handleBot
{
	bottom: -5px;
}

.originalImage
{
	z-index: 1;
	position: absolute;
	top: 0;
}

IMG.Code {
	float: left;
	padding-right: 5px;
}

textarea#TextGen {
	color: #4b4b4b;
	font-family: arial;
	font-size: 13px;
	margin: 0px;
	float: left;
	padding: 0px;
	padding-left: 3px;
	padding-top: 3px;
	margin-top: 5px;
	width: 436px;
	height: 75px;
	border-radius: 3px;
	border: 1px solid #bbb;
	resize: none;
}

input[type="submit"]#TextGen {
	color: #fff;
	float: left;
	text-align: left;
	padding-left: 25px;
	font-weight: bold;
	font-family: arial;
	margin-top: 51px;
	margin-left: -235px;
	margin-bottom: 16px;
	width: 170px;
	height: 30px;
	background-color: #F89006;
	border: 1px solid #F0710A;
	border-radius: 3px;
	cursor: pointer;
	background-image: url("../images/icons/accept.png");
	background-repeat: no-repeat;
	background-position: 5px 6px;
}

textarea#TextHyves, textarea#TextUBB, textarea#TextHTML, textarea#TextURL {
	color: #888;
	font-family: arial;
	font-size: 10pt;
	margin: 0px;
	padding: 4px;
	padding-left: 3px;
	padding-top: 3px;
	margin-bottom: 14px;
	margin-top: 5px;
	width: 342px;
	height: 70px;
	border: 1px solid #b0b0b0;
	line-height: 1.35em;
	box-shadow: 0 0 5px #DDDDDD inset;
	overflow: hidden;
	resize: none;
}

textarea#UBB:hover, textarea#Hyves:hover, textarea#URL:hover, textarea#HTML:hover, textarea#HyvesD:hover, textarea#UBBD:hover, textarea#HTMLD:hover, textarea#URLD:hover, textarea#TextHyves:hover, textarea#TextUBB:hover, textarea#TextHTML:hover, textarea#TextURL:hover {
	border: 1px solid #999;
	box-shadow: 0 0 5px #aaa inset;
}

.TextgenAlphabet {
	float: left;
	width: 83px;
	height: 83px;
	text-align: center;
}

.TextgenAlphabet IMG {
	max-width: 60px;
	max-height: 60px;
}
/* End text generator */

/* Easy Slider */
#Etalage {
	float: left;
	margin-top: 6px;
	background-color: #fff;
	width: 316px;
	height: 146px;
	border-radius: 7px;
	margin-left: 3px;
	margin-right: 2px;
	margin-bottom: 15px;
	padding-bottom: 2px;
}

#Etalage .Image {
	float: left;
	background-color: #F0F0F0;
	border: 1px solid #CCCCCC;
	height: 93px;
	width: 93px;
	margin-left: 10px;
	text-align: center;
}

#Etalage .Image img {
	max-height: 87px;
	max-width: 87px;
}

#Etalage .Image * {
	vertical-align: middle;
}

#Etalage .Image span {
	display: inline-block;
	height: 100%;
	margin: 0;
	padding: 0;
	width: 1px;
}

#Etalage H1 {
	background-image: url("../images/content-top-trending.png");
	background-color: #fff;
	border-top-left-radius: 7px;
	border-top-right-radius: 7px;
	margin: 0px;
	margin-top: -6px;
	padding-top: 10px;
	padding-left: 12px;
	width: 304px;
	height: 26px;
	color: #fff;
	font-size: 16px;
	text-shadow: 0px 1px #b66f39;
	margin-bottom: 11px;
}

#Etalage a {
	float: left;
	display: block;
	width: 195px;
	text-align: right;
	text-decoration: none;
}

#Etalage a:hover {
	text-decoration: underline;
}

#Etalage a.First {
	margin-bottom: 12px;
}

#slider, #slider2 {
	width: 304px;
	height: 96px;
	overflow: hidden;
}	

#slider ul, #slider li,
#slider2 ul, #slider2 li{
	margin:0;
	padding:0;
	list-style:none;
}

#slider ul, #slider li img,
#slider2 ul, #slider2 li img {
	border: 0px;
}		

#slider2{margin-top:1em;}
#slider li, #slider2 li{ 
	width: 304px;
	height: 96px;
	overflow: hidden; 
}	

/* numeric controls */	
ol#controls{
	display: none;
	margin:1em 0;
	padding:0;
	height:28px;
	margin-top: -30px;
	margin-left: 8px;
	max-width: 105px;
	float: right;
	margin-right: 5px;
}

ol#controls li{
	margin: 0 5px 0 0; 
	padding: 0;
	float: left;
	list-style: none;
	height: 28px;
	line-height: 28px;
}

ol#controls li a{
	float: left;
	line-height: 9px;
	background: #44ADCA;
	color: #fff;
	padding: 5px;
	text-decoration: none;
	font-size: 8pt;
}

ol#controls li.current a{
	background: #6DA50A;
	color: #fff;
	font-weight: bold;
	line-height: 9px;
}

/* Easy Slider */

/* Upload system */
#Uploader {
	margin-left: 12px;
}

#Uploader #Navigation {
	width: 708px;
	height: 30px;
	border-bottom: 1px solid #aaa;
}

#CategoryForm {
	float: left;
	width: 100%;
	margin-bottom: 10px;
	margin-top: 12px;
}

#CategoryForm input[type="text"] {
	float: left;
	color: #555;
	padding-left: 5px;
	margin-top: 3px;
	width: 165px;
	height: 24px;
	border-radius: 4px;
	border: 1px solid #aaa;
}

#Uploader SPAN.Done {
	float: left;
	color: #4DB849;
	font-size: 19px;
}

#Uploader SPAN.Todo {
	float: left;
	color: #aaa;
	font-size: 19px;
}

#Uploader SPAN.Active {
	float: left;
	color: 4b4b4b;
	font-size: 19px;
	margin-bottom: 10px;
}

SPAN#uText {
	float: left;
	margin-top: 4px;
	margin-left: 6px;
	font-weight: bold;
	width: 222px;
	color: #fff;
}

textarea.uTags {
	float: left;
	width: 224px;
	height: 50px;
	border: 1px solid #bbb;
	color: #777;
	font-family: arial;
	font-size: 12px;
	padding: 5px;
	border-radius: 4px;
	margin-left: 5px;
	margin-top: -4px;
	box-shadow: 0 0 5px #ddd inset;
}

.uTagHolder {
	float: left;
	width: 246px;
	height: 336px;
}
/* End upload system */

/* Notification messages */
#nBarOrange, #nBarGreen {
	float: left;
	width: 708px;
	padding: 10px;
	margin-top: 4px;
	margin-bottom: 12px;
}

#nBarOrange {
	background-color: #FDEAAB;
	border: 1px solid #F1991E;
}

#nBarGreen {
	background-color: #D5E4A3;
	border: 1px solid #4C9143;
}
/* End notification messages */

/* 404 Cartoon */
#NotFound {
	position: absolute;
	margin-left: 615px;
}
/* End 404 cartoon */

/* Alerts */
#popup_container {
	font-family: Arial, sans-serif;
	font-size: 12px;
	min-width: 300px; /* Dialog will be no smaller than this */
	max-width: 600px; /* Dialog will wrap after this width */
	background-color: #FFF;
	border: solid 4px #787373;
	color: #000;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
}

#popup_title {
	font-size: 14px;
	font-weight: bold;
	text-align: center;
	line-height: 1.75em;
	color: #FFF;
	background-color: #FF962C;
	border: solid 1px #D87827;
	border-bottom: solid 1px #D87827;
	text-shadow: 0 1px #B66F39;
	cursor: default;
	padding: 0em;
	margin: 0em;
}

#popup_content {
	background: 16px 16px no-repeat url(images/info.gif);
	padding: 1em 1.75em;
	margin: 0em;
}

#popup_content.alert {
	background-image: url(images/info.gif);
}

#popup_content.confirm {
	background-color: #fff;
	border-left: 1px solid #bbb;
	border-right: 1px solid #bbb;
	border-bottom: 1px solid #bbb;
}

#popup_content.prompt {
	background-image: url(images/help.gif);
}

#popup_message {
	color: #4b4b4b;
	font-family: arial;
	padding-left: 48px;
}

#popup_panel {
	text-align: center;
	margin: 1em 0em 0em 1em;
}

#popup_prompt {
	margin: .5em 0em;
}

#alertsBox {
	position: absolute;
	border-top: 1px solid #ccc;
	top: 88px;
	background: #fff;
	border-radius: 0px 0px 8px 8px; 
	width: 412px;
	z-index: 9999;
	margin-left: -104px;
	-moz-box-shadow: -3px 5px 9px #777;
	-webkit-box-shadow: -3px 5px 9px #777;
	box-shadow: -3px 5px 9px #777;
}
#alertsBox .head {
	border-bottom: 1px solid #ccc;
	height: 31px;
	font-size: 15px;
	padding: 2px;
}
#alertsBox .allAlerts {
	text-align: center;
	font-size: 12px;
}
#alertsBox .allAlerts:hover {
	text-decoration: underline;
}	
#alertsBox .allAlerts, #alertsBox .head {
	line-height: 30px;
	padding-left: 10px;
	display: block;
	min-height: 30px;
	width: 402px;
	text-decoration: none;
}
#alertsBox .head {
	width: 400px;
}
#alertsBox ul li {
	border-bottom: 1px solid #ccc;
}
#alertsBox ul li a {
	padding: 5px;
	display: block;
	width: 402px;
	min-height: 39px;	
	text-decoration: none;
}
#alertsBox ul li a:hover {
	background: #eee;
}	
#alertsBox img {
	float: left;
	padding: 1px;
	width: 34px;
	height: 34px;
	border: 1px solid #ccc;
	border-radius: 3px;
	background-color: #fff;
}
#alertsBox img:hover {
	border: 1px solid #999;
}
#alertsBox ul li .alert {
	float: right;
}	
#alertsBox ul li .alert span.username {
	display: block;
	width: 356px;
	margin-bottom: 3px;
	font-weight: bold;
}
#alertsBox ul li .alert span.text {
	display: block;
	width: 356px;
}	
#noAlerts {
	display: block;
	height: 20px;
	line-height: 20px;
	padding: 10px;
}

ul#Alerts {
	float: left;
	margin-left: 12px;
	margin-bottom: 6px;
}

 #Alerts li a.aItem  {
	float: left;
	width: 672px;
	height: 52px;
	margin-bottom: 10px;
}

#Alerts .aItem {
	border: 1px solid #d0d0d0;
	background: #f3f3f3;
	margin-left: 2px;
}

#Alerts li .aItem:hover {
	border: 1px solid #4b4b4b;
	background: #d0d0d0;
}

#Alerts li a.aAvatar img {
	float: left;
	width: 50px;
	height: 50px;
	padding: 1px;
	border: 1px solid #d0d0d0;
}

#Alerts li a.aAvatar img:hover {
	border: 1px solid #4b4b4b;
}

.aTime {
	float: right;
	margin-top: 17px;
	margin-right: 14px;
}

.aMessage {
	position: absolute;
	margin-left: 8px;
	margin-top: 8px;
	font-weight: bold;
}

.aText {
	position: absolute;
	margin-top: 27px;
	margin-left: 8px;
}
/* End alerts */

/* Footer */
.Footer {
	position: relative;
	margin-top: -125px;
	width: 100%;
	height: 125px;
	background-color: #005886;
}

.Footer .Container {
	position: absolute;
	left: 50%;
	margin-left: -486px;
	width: 972px;
	color: #fff;
	display: table;
	float: left;
}

.Footer .Container .collom {
	display: table-tr;
	padding-left: 12px;
	margin-top: 14px;
	float: left;
	width: 164px;
	border-left: 1px solid #50828E;
	font-size: 9pt;
}

.Footer .Container .collom A IMG {
	margin-top: 3px;
	margin-right: 6px;
}

.Footer .Container .collomFirst {
	margin-right: 13px;
	border: none;
	width: 203px;
	padding: 0;
}

.Footer .Container .collomFirst A {
	display: block;
	margin-top: 22px;
}

.Footer .Container .collomLast {
	margin-right: -20px;
	width: 211px;
}

.Footer .Container .collomLast UL {
	margin-top: 1px;
}

.Footer .Container .collom UL {
	margin-top: 4px;
}

.Footer .Container .collomLast UL {
	margin-top: 5px;
}

.Footer .Container .collom UL LI {
	height: 16px;
}

.Footer .Container .collom UL LI A {
	color: #eaeaea;
	font-size: 9pt;
	text-decoration: none;
}

.Footer .Container .collom UL LI A:hover {
	color: #499bc6;
	text-decoration: none;
}

.Footer .Container .collom A IMG {
	border: 0;
}
/* End footer */

.inputButtons {
	width: 728px;
	height: 36px;
	float: left;
	margin-bottom: 5px;
}

.preDebug {
	margin-top: 0px;
	width: 737px;
	padding: 10px;
	background: #fff;
	border-radius: 5px;
}body {
	font-family: arial;
	font-size: 10pt;
}

.sceditor-container {
	border: 1px solid #AAAAAA;
	border-radius: 4px 4px 4px 4px;
	overflow: hidden;
	position: relative;
}

.sceditor-container, .sceditor-container div, div.sceditor-dropdown, div.sceditor-dropdown div {
	margin: 0;
	padding: 0;
	z-index: 3;
}

blockquote {
	background: none repeat scroll 0 0 #f9f9f9;
	border: 1px solid #ccc;
	margin: 0.25em 0;
	padding: 0.25em;
	position: relative;
	z-index: 10;
}

blockquote cite {
	border-bottom: 1px solid #AAAAAA;
	display: block;
	font-size: 1em;
	font-weight: bold;
}

.sceditor-container iframe, .sceditor-container textarea {
	border: 0 none;
	color: #111111;
	font-family: arial;
	font-size: 13px;
	outline: medium none;
	padding: 0;
	resize: none;
}

div.sceditor-resize-cover {
	background: none repeat scroll 0 0 #000000;
	height: 6000px;
	left: 0;
	opacity: 0.3;
	position: absolute;
	top: 0;
	width: 3000px;
	z-index: 2;
}
div.sceditor-grip {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -323px 0 transparent;
	bottom: 0;
	cursor: pointer;
	height: 10px;
	overflow: hidden;
	position: absolute;
	right: 0;
	width: 10px;
	z-index: 3;
}
div.sceditor-dropdown {
	position: absolute;
	background: none repeat scroll 0 0 #FFFFFF;
	border: 1px solid #BBBBBB;
	color: #222222;
	font-size: 13px;
	margin-top: -163px;
	z-index: 6;
	float: right;
}
div.sceditor-dropdown form {
	margin: 0;
}
div.sceditor-dropdown label {
	display: block;
	font-size: 0.95em;
	font-weight: bold;
	margin: 0.65em 0 0.15em;
}
div.sceditor-dropdown .button {
	margin: 0.5em 0 0;
}
.sceditor-pastetext textarea {
	border: 1px solid #BBBBBB;
	width: 20em;
}
div.sceditor-inserttable, div.sceditor-insertimage, div.sceditor-pastetext, div.sceditor-insertlink, div.sceditor-insertemail {
	padding: 5px;
}
.sceditor-insertemoticon img {
	cursor: pointer;
	margin: 2px;
}
.sceditor-more {
	border-top: 1px solid #BBBBBB;
	cursor: pointer;
	display: block;
	padding: 2px 0;
	text-align: center;
}
.sceditor-more:hover {
	background: none repeat scroll 0 0 #EEEEEE;
}
.sceditor-fontsize-option, .sceditor-font-option {
	color: #222222;
	cursor: pointer;
	display: block;
	font-size: 14px;
	padding: 4px 6px;
	text-decoration: none;
}
.sceditor-fontsize-option:hover, .sceditor-font-option:hover {
	background: none repeat scroll 0 0 #EEEEEE;
}
.sceditor-color-column {
	float: left;
}
.sceditor-color-option {
	border: 1px solid #FFFFFF;
	display: block;
	height: 10px;
	overflow: hidden;
	width: 10px;
}
.sceditor-color-option:hover {
	border: 1px solid #333333;
}
div.sceditor-toolbar {
	background: none repeat scroll 0 0 #F7F7F7;
	border-bottom: 1px solid #AAAAAA;
	overflow: hidden;
	padding: 5px;
}
div.sceditor-group {
	background: none repeat scroll 0 0 #DDDDDD;
	border-radius: 4px 4px 4px 4px;
	display: inline-block;
	margin: 1px 5px 1px 0;
	overflow: hidden;
	padding: 2px;
}
.sceditor-button {
	cursor: pointer;
	float: left;
	padding: 3px 4px;
}
.sceditor-button div, .sceditor-button {
	display: block;
	height: 16px;
	width: 16px;
}
.sceditor-button div {
	margin: 0;
	padding: 0;
}
.sceditor-button:hover {
	background: none repeat scroll 0 0 #EEEEEE;
}
.sceditor-button-bold div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -119px 0 transparent;
}
.sceditor-button-italic div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -170px 0 transparent;
}
.sceditor-button-underline div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -85px -17px transparent;
}
.sceditor-button-strike div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -306px 0 transparent;
}
.sceditor-button-subscript div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -34px 0 transparent;
}
.sceditor-button-superscript div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll 0 -17px transparent;
}
.sceditor-button-left div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -102px 0 transparent;
}
.sceditor-button-center div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -17px 0 transparent;
}
.sceditor-button-right div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -221px -17px transparent;
}
.sceditor-button-justify div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -68px -17px transparent;
}
.sceditor-button-font div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -272px 0 transparent;
}
.sceditor-button-size div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -17px -17px transparent;
}
.sceditor-button-color div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -255px -17px transparent;
}
.sceditor-button-removeformat div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -68px 0 transparent;
}
.sceditor-button-cut div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -272px -17px transparent;
}
.sceditor-button-copy div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -85px 0 transparent;
}
.sceditor-button-paste div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -119px -17px transparent;
}
.sceditor-button-pastetext div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -136px 0 transparent;
}
.sceditor-button-bulletlist div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -204px 0 transparent;
}
.sceditor-button-orderedlist div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -289px 0 transparent;
}
.sceditor-button-redo div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -34px -17px transparent;
}
.sceditor-button-undo div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -221px 0 transparent;
}
.sceditor-button-table div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -102px -17px transparent;
}
.sceditor-button-horizontalrule div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -170px -17px transparent;
}
.sceditor-button-image div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -238px 0 transparent;
}
.sceditor-button-code div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -187px -17px transparent;
}
.sceditor-button-email div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -136px -17px transparent;
}
.sceditor-button-link div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -153px 0 transparent;
}
.sceditor-button-unlink div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -204px -17px transparent;
}
.sceditor-button-quote div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -51px 0 transparent;
}
.sceditor-button-emoticon div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -238px -17px transparent;
}
.sceditor-button-youtube div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -255px 0 transparent;
}
.sceditor-button-date div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -51px -17px transparent;
}
.sceditor-button-time div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll 0 0 transparent;
}
.sceditor-button-print div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -153px -17px transparent;
}
.sceditor-button-source div {
	background: url("../images/jquery.sceditor.min.png") no-repeat scroll -187px 0 transparent;
}
.chatbox {
	position: fixed;
	width: 225px;
	bottom: 0px;
	float: right;
	margin-top: 0px;
	margin-left: 10px;
	z-index: 999999;
}

.chatboxhead {
	background-color: #f99d39;
	padding: 7px;
	color: #ffffff;
	border-right: 1px solid #f99d39;
	border-left: 1px solid #f99d39;
}

.chatboxblink {
	background-color: #176689;
	border-right: 1px solid #176689;
	border-left: 1px solid #176689;
}

.chatboxcontent {
	font-family: arial,sans-serif;
	font-size: 13px;
	color: #333333;
	height: 200px;
	width: 209px;
	overflow-y: auto;
	overflow-x: auto;
	padding: 7px;
	border-left: 1px solid #cccccc;
	border-right: 1px solid #cccccc;
	border-bottom: 1px solid #eeeeee;
	background-color: #ffffff;
	line-height: 1.3em;
}

.chatboxinput {
	padding: 5px;
	background-color: #ffffff;
	border-left:1px solid #cccccc;
	border-right:1px solid #cccccc;
	border-bottom:1px solid #cccccc;
}

.chatboxtextarea {
	width: 206px;
	height:44px;
	padding:3px 0pt 3px 3px;
	border: 1px solid #eeeeee;
	margin: 1px;
	overflow: hidden;
}

.chatboxtextareaselected {
	border: 2px solid #f99d39;
	margin: 0;
}

.chatboxmessage {
	margin-left: 1em;
}

.chatboxinfo {
	margin-left: -1em;
	color: #666666;
}

.chatboxmessagefrom {
	margin-left: -1em;
	font-weight: bold;
}

.chatboxmessagecontent {
}

.chatboxoptions {
	float: right;
}

.chatboxoptions a {
	text-decoration: none;
	color: white;
	font-weight: bold;
	font-family: Verdana,Arial,"Bitstream Vera Sans",sans-serif;
}

.chatboxtitle {
	float: left;
}/* -- Form Styles ------------------------------- */
div.fieldset {
	border:  1px solid #afe14c;
	margin: 0px 0;
	padding: 20px 10px;
}

div.fieldset span.legend {
	position: relative;
	background-color: #FFF;
	padding: 3px;
	padding-bottom: -20px;
	top: -30px;
	font: 700 14px Arial, Helvetica, sans-serif;
	color: #73b304;
}

div.flash {
	width: 710px;
	margin: 10px 5px;
	min-height: 100px;
	border-color: #ccc;
	-moz-border-radius-topleft : 5px;
	-webkit-border-top-left-radius : 5px;
	-moz-border-radius-topright : 5px;
	-webkit-border-top-right-radius : 5px;
	-moz-border-radius-bottomleft : 5px;
	-webkit-border-bottom-left-radius : 5px;
	-moz-border-radius-bottomright : 5px;
	-webkit-border-bottom-right-radius : 5px;
}

/*label { 
	width: 150px; 
	text-align: right; 
	display:block;
	margin-right: 5px;
}*/

#btnSubmit { margin: 0 0 0 155px ; }

/* -- Table Styles ------------------------------- */
td {
	font: 10pt Arial;
	vertical-align: top;
}

.progressWrapper {
	width: 710px;
	overflow: hidden;
}

.progressContainer {
	margin: 5px;
	padding: 4px;
	border: solid 1px #E8E8E8;
	background-color: #F7F7F7;
	overflow: hidden;
}

/* Error */
.red {
	border: solid 1px #B50000;
	background-color: #FFEBEB;
}

/* Current */
.green {
	border: solid 1px #DDF0DD;
	background-color: #EBFFEB;
}

/* Complete */
.blue {
	border: solid 1px #CEE2F2;
	background-color: #F0F5FF;
}

.progressName {
	font-size: 8pt;
	font-weight: 700;
	color: #555;
	width: 323px;
	height: 14px;
	text-align: left;
	white-space: nowrap;
	overflow: hidden;
}

.progressBarInProgress, .progressBarComplete, .progressBarError {
	font-size: 0;
	width: 0%;
	height: 2px;
	background-color: blue;
	margin-top: 2px;
}

.progressBarComplete {
	width: 100%;
	background-color: green;
	visibility: hidden;
}

.progressBarError {
	width: 100%;
	background-color: red;
	visibility: hidden;
}

.progressBarStatus {
	margin-top: 2px;
	width: 337px;
	font-size: 7pt;
	font-family: Arial;
	text-align: left;
	white-space: nowrap;
}

a.progressCancel {
	font-size: 0;
	display: block;
	height: 14px;
	width: 14px;
	background-image: url(../images/cancelbutton.gif);
	background-repeat: no-repeat;
	background-position: -14px 0px;
	float: right;
}

a.progressCancel:hover {
	background-position: 0px 0px;
}

/* -- SWFUpload Object Styles ------------------------------- */
.swfupload {
	vertical-align: top;
}