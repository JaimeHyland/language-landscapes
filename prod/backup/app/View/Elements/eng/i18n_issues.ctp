
<H3>Internationalization &ndash; preparing your site for the world</H3> 

<p>Internationalization (often referred to as i18n for short) is often simply referred to as the process of preparing your software or site for localization.  Before you begin this task, however, you'll need to take a good look at what your new target audiences will require, and what resources you have available to meet those needs.  The architecture upon which your website or software product is based will be an important consideration in assessing how much effort you'll need to put into the process.</p>
      			
<H3>Deciding what you need</H3>
        			
  <p>Whether the system you are localizing is a simple website, a desktop program or a sophisticated web application, there will inevitably be a list of different decisions you'll need to make on how you approach the localization challenge. You'll need to consider the following:
  <ul>
    <li>The requirements of the target languages</li>
    <li>The needs and expectations of your target audience</li>
    <li>The capabilities of your development platform and/or technologies</li>
    <li>Your budget</li>
  </ul>
  For example, you'll need to consider whether you need to adjust front-end code to correctly show currency values and dates in each locale. You'll also need to consider what mechanism your website or application uses to decide such issues as which language to display by default.  Another important decision to make is how to you want to fit your localization workflow into your development lifecycle.</p> 

<p>Defining the specialized vocabulary in the system's first language is one of the first steps you'll take. The way you go about this process will have a decisive influence on the quality, complexity and cost of your localization (l10n) effort.  Some languages (e.g. Arabic or Chinese) require very extensive changes in formatting, and even Western European languages will often need small changes in formats.</p>

  <p>You may have content stored in databases that you need to show your new target audience in their language. It may be necessary to add complexity to your database schema to ensure that the data can appear in the right language.  You may even need to create new data. We can take you through the main options available to you, and can even implement them for you if you wish.</p>

  <p>Payment methods and currencies available to your new web visitors may differ from those of your existing customers. We can help you decide what you need and implement the changes you choose to make. </p>

  <p>The laws of some countries may require that you add extra information not required on your existing website. One example of this might be the German requirement that the person responsible for the site's content is featured on what is generally termed as an "Impressum" page.</p>        

  <p>You may also want to look at your text to make it as internationally relevant as possible. Sometimes content that your existing audience finds interesting is less relevant to new target web visitors. You might want to remove or replace such materials. </p>

  <H3>Software engineering &ndash; adjusting your code</H3>
    <p>You will almost always need to make changes to you website or software code to implement your internationalization decisions.  Tasks may include:
      <ul>
        <li>Replacing "hard-coded" texts</li>
        <li>Removing concatenations</li>
        <li>Making changes to character encoding</li>
        <li>Adding scripts to create localization packages for the next stage</li>
      </ul>

    Other engineering tasks you'll have to do will depend on your architecture, the locale you want to localize into and the decisions you have made on how you want the localized site to look to your new target audiences.</p> 

  <H3>Think strategically</H3>
		
	<p>Every website or software package is likely to change over time &ndash; whether it's a fast-moving news site, a relatively static set of pages presenting a limited number of productw, a sophisticated cloud application or a simple desktop utility. That's why one of the most important decisions you'll have to make is how you want your localization framework to respond to the change. A number of strategic approaches are possible:
	 <ol>
			<li><span title="Following this approach you change the content in your source language and then localize your changes before publishing all changes in all locales simultaneously." style="color:blue">Great Leap Forward</span></li>
			<li><span title="Using this model you update your source locale or locales dynamically, and periodically localize into the other locales as and when the need arises or resources permit." style="color:blue">Periodic catch-up</span></li>
			<li><span title="This is where you make an initial localization of your site and basically leave the content in each locale to develop independently with little or no reference to changes in the other locales" style="color:blue">Diverge</span></li>
	 </ol>
	</p>

	<p>In practice, most developers of software packages will broadly follow the first approach and complete localization into all their chosen locales before each release of a new version of their product. Alternatively, most owners of relatively sophisticated modern websites will end up (whether consciously or unconsciously) choosing a combination of all three approaches, individual elements in the website being treated differently depending on how dynamically they change and how relevant they are to the website owner's various markets. You will need to consider your localization resources, the architecture of your site and your communication needs in order to decide which approach to adopt in the various sections of your site. Language Landscapes can guide you through these decisions in conjunction with your web developer.</p>

  <p>It is important, however, for you to decide which approach you are taking where, and to know why you have made that choice. Language Landscapes can discuss these issues with you and advise you on the best approach in each content category.</p>

	<p>One very important decision you'll have to make is what languages are shown when a user first opens the site or program, and how that changes depending on user actions. How, for example, does the site decide which language to use when it opens?  Or what precisely happens when you press the button to switch to a new language?  Is the user sent back to the home page in the new language or does the current screen simply switch language? For software packages the choices are slightly different: does each package sold contain resources for a single language only, or does it allow the user to switch? Can the user change languages dynamically, or do they need to restart every time? With web localization, what you decide depends as much on your content and your localization approach as it depends on the platforms you are using, whereas software localization dynamics often tend to be more platform-driven.
      		  
<H3>Making sure everything that needs to be localized is localizable</H3>
        			
  <p>Once you've made your decision on what what you need, you're ready to start your engineering work. This task will consist of preparing your code so that it can be localized effectively. Adjustments that typically need to be made include the elimination of "hard-coded" and "concatenated" texts, the resizing and repositioning of GUI controls and the adjustment of images and icons that appear to the user.  To ensure that your internationalization process is complete, your Quality Assurance process will very likely have to extend your existing test cases to check in each development cycle that all "localizables" have been detected and internationalized. You may need to create simple scripts to ensure that all localizables are organized into logical groups and can be localized without posing the risk of breaking your software functionalities. </p>

  <p>Controls and texts for display with them, especially menu items and similar, may need to be managed separately for each language, especially if the localized site excludes particular pages or includes additional ones.  Dead-end links in localized versions have to be avoided. Keys for localizable text strings may need to be adjusted to give translators the extra information they need to translate them elegantly and correctly. Language Landscapes can guide you through this process using a separate pre-defined workflow. The i18n stage also includes the development of scripts and/or definition of processes by which the l10n task is completed, including change management processes.</p>

  <p>Once you're confident that the software engineering and content management sides of the internationalization process are complete, you're ready to begin localization.</p>