
<h3>The process we use for translating your software product or website</h3>

<p>The processes involved in localizing web sites have a lot in common with those you need to follow to translate a classical software product. While there are still some differences in emphasis in each discipline, there is a rapid convergence of the two aspects of localisation because of the increasing dominance of web-based platforms in software development (particularly for cloud-based software) and the increasing sophistication of web technologies. That's why we treat them here as a single workflow. Depending on your website or software package, you will find some of this workflow relevant to your needs and can ignore others.</p>

<div class="panel-group" id="accordion1">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" id="sub-accordion" data-parent="#accordion" href="#collapseOne">
          Get your ducks in a row
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
          <div class="panel panel-default">
    		<div class="panel-heading">
      			<h4 class="panel-title">
        			<a data-toggle="collapse" data-parent="#sub-accordion1" href="#collapseOneOne">
          				Get it right in your source language
        			</a>
      			</h4>
    		</div>
    		<div id="collapseOneOne" class="panel-collapse collapse">
      			<div class="panel-body">
        			Long before you even consider what you need to get your website or software product localised, you need to define what it's designed to do and what <span title="We're not talking about C++ here or Python or Java, what we're referring to here is English or German or Spanish or Japanese!" style="color:blue">language</span> it is going to be developed in.  To set out what your product or service does, you'll need to define a specialised vocabulary in the system's first language with which to describe its purpose and logic. The way you go about this process will also have a decisive influence on the quality, complexity and cost of your localisation (l10n) effort.  (XXX JAIME; CAN WE TAKE OUT THE FOLLOWING SENTENCE TOO?:) A well-defined written system containing well-defined rules for describing how it works is as essential to the goal of a well-executed localisation of your system as it is for its efficient development.
      			</div>
    		</div>
  		</div>
  		<div class="panel panel-default">
    		<div class="panel-heading">
      			<h4 class="panel-title">
        			<a data-toggle="collapse" data-parent="#sub-accordion1" href="#collapseOneTwo">
          				Decide what you need
        			</a>
      			</h4>
    		</div>
    		<div id="collapseOneTwo" class="panel-collapse collapse">
      			<div class="panel-body">
        		 <p>Whether the system you are localizing is a simple website, a desktop program or a sophisticated web application, there will inevitably be a list of different decisions you'll need to make on how you approach the localisation challenge. Most of these decisions will depend on the needs of prospective users, but they're also likely to be influenced by the capabilities of the platforms you are using and your budget. One of the things you'll need to consider is the extent to which you need to adjust front-end code to correctly show in each locale currency values and dates, for example. You'll also need to consider what mechanism the software uses to decide issues such as which language to display.  Another consideration you'll have is how to fit your localisation workflow into your development lifecycle. Language Landscapes can guide you through all these options in a simple and systematic predefined process.</p>
		
					   <p>Every website or software package is likely to change over time – whether it's a fast-moving news site, a relatively static set of pages presenting a product, a sophisticated cloud application or a simple desktop utility. That's why one of the most important decisions you'll have to make is how you want your localisation framework to respond to the change. A number of philosophical (XXX JAIME: IS "PHILOSOPHICAL" THE RIGHT WORD HERE? HOW ABOUT "PRAGMATIC"? OR "PRACTICAL") approaches are possible:
						  <ol>
							 <li><span title="Following this approach you change the content in your source language and then localise your changes before publishing all changes in all locales simultaneously." style="color:blue">Great Leap Forward</span></li>
							 <li><span title="Using this model you update your source locale or locales dynamically, and periodically localise into the other locales as and when the need arises or resources permit." style="color:blue">Periodic catch-up</span></li>
							 <li><span title="This is where you make an initial localisation of your site and basically leave the content in each locale to develop independently with little or no reference to changes in the other locales" style="color:blue">Diverge</span></li>
						  </ol>
					   </p>

					   <p>In practice, most developers of software packages will broadly follow the first approach and complete localisation into all their chosen locales before each release of a new version of their product. Alternatively, most owners of relatively sophisticated modern websites will consciously or unconsciously choose a combination of all three approaches, individual elements in the website being treated differently depending on how dynamically they change and how relevant they are to the website owner's various markets. You will need to consider your localisation resources, the architecture of your site and your communication needs in order to decide which approach to adopt in the various sections of your site. Language Landscapes can guide you through these decisions in conjunction with your web developer.  It is important, however, for you to decide which approach you are taking where, and to know why you have made that choice. Language Landscapes can discuss these issues with you and advise you on the best approach in each content category.</p>

					   <p>One very important decision you'll have to make is what languages are shown when a user first opens the site or program, and how that changes depending on user actions. How, for example, does the site decide which language to use when it opens?  Or what precisely happens when you press the button to switch to a new language?  Is the user sent back to the home page in the new language or does the current screen simply switch language? For software packages the choices are slightly different: does each package sold contain resources for a single language only, or does it allow the user to switch? Can the user change languages dynamically, or do they need to restart every time? With web localisation, what you decide depends as much on your content and your localisation approach as it depends on the platforms you are using, whereas software localisation dynamics often tend to be more platform-driven.
      		  </div>
    		</div>
    	</div>
  		<div class="panel panel-default">
    		<div class="panel-heading">
      			<h4 class="panel-title">
        			<a data-toggle="collapse" data-parent="#sub-accordion1" href="#collapseOneThree">
          				Make sure your system is fully internationalised
        			</a>
      			</h4>
    		</div>
    		<div id="collapseOneThree" class="panel-collapse collapse">
      			<div class="panel-body">
        			<p>Internationalisation (often referred to as i18n for short) is the process of preparing your software or site for localisation. It will consist of preparing your code so that it can be localised effectively. Adjustments that typically need to be made include the elimination of "hard-coded" and "concatenated" texts, the resizing and repositioning of GUI controls and the adjustment of images and icons that appear to the user.  To ensure that your internationalisation process is complete, your Quality Assurance process will very likely have to extend your existing test cases to check in each development cycle that all "localizables" have been detected and internationalised. You may need to create simple scripts to ensure that all localizables are organized into logical groups and can be localised without posing the risk of breaking your software functionalities. </p>

              <p>Controls and texts for display with them, especially menu items and similar, may need to be managed separately for each language, especially if the localised site excludes particular pages or includes additional ones.  Dead-end links in localised versions have to be avoided. Keys for localizable text strings may need to be adjusted to give translators the extra information they need to translate them elegantly and correctly. Language Landscapes can guide you through this process using a separate pre-defined workflow. The i18n stage also includes the development of scripts and/or definition of processes by which the l10n task is completed, including change management processes</p>
      			</div>
    		</div>
    	</div>
    	<div class="panel panel-default">
    		<div class="panel-heading">
      			<h4 class="panel-title">
        			<a data-toggle="collapse" data-parent="#sub-accordion1" href="#collapseOneFour">
          				Define the terminology and style in your target language
        			</a>
      			</h4>
    		</div>
    		<div id="collapseOneFour" class="panel-collapse collapse">
      			<div class="panel-body">
        			<p>The first step in the translation process proper is to decide the vocabulary you need to use in the target language.  A key task is to draw up a bilingual glossary based on the vocabulary in the source language that you defined early in the development phase. This is likely to be a two-way process, in which you may discover the need to correct or extend your original source language glossary. You will almost certainly want to make decisions on the style and tone you want to achieve in the target language. Language Landscapes will lead this terminology definition task in consultation with your specialists and create a style guide on the basis of your preferences. We use the latest terminology management software to support the terminology definition process. </p>
      			</div>
  			</div>  	
    	</div>
    	<div class="panel panel-default">
    		<div class="panel-heading">
      			<h4 class="panel-title">
        			<a data-toggle="collapse" data-parent="#sub-accordion1" href="#collapseOneFive">
          				Prepare the translatables
        			</a>
      			</h4>
    		</div>
    		<div id="collapseOneFive" class="panel-collapse collapse">
      			<div class="panel-body">
        			<p>Once the files to be translated have been created by the scripts and processes developed in the i18n stage, they are imported into one of the leading Translation Memory systems (the precise package or packages to be used will depend on the nature of the files required), which will also integrate the bilingual glossary into its terminology management system.  We then lock any sensitive code in such files to ensure that it is not modified accidentally, and pass the file and associated materials on to our translators.
      			</div>
  			</div>  	
    	</div>
      </div>
    </div>
  </div>
</div><div class="panel-group" id="accordion2">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
          Translate
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <p>We then choose suitable translators and our small group of talented and experienced specialists explain their task to them thoroughly.  They must have all the material they need to understand the software being localised. However, they will almost certainly have questions to ask on particular translation problems they encounter. Language Landscapes will manage the whole translation process and will consult with you on the most effective means of communication between your specialists and our translators. The whole translation process including proofreading and correction processes is done within the chosen CAT tool.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Quality Control
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <p>As with all our translation work, we recommend running the translations returned to us through a two-stage proofreading process, involving a first proofing run concentrating on the quality dimensions of accuracy and consistency (with the help of the bilingual glossary), and a second run concentrating on effectiveness and elegance (with the help of the agreed style guide). Both runs are tasked with checking that grammar and spelling are correct.</p> 
        <p>However, quality control for the broader localisation process has hardly started yet.  While the details of the quality control process are defined essentially by the customer, they will generally involve a test implementation of the localisation scripts and processes defined at the i18n stage, followed by a smoke test to check that the expected changes have indeed occurred.  Whether the quality of the finished localisation is checked in a separate step or as an integrated part of an in-house testing system will depend on the customer's needs.  Experience suggests that testing will often uncover opportunities to improve and complete i18n lists and that even source language texts will often need correction or enhancement.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
          Localise the Documentation
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        <p>Often the biggest headache in localisation quality control is in ensuring that Stage 1 of the software localisation process (software GUI localisation) uses the same expressions in the same context as Stage 2 (localisation of documentation, including user manuals, readme files, release notes, etc.). We solve this problem through our experience in using translation memory, terminology management and autosuggest algorithms. We recommend that wherever possible the translator should have access to a working copy of the application whose documentation he or she is translating and, where this is impossible, should at least be able to see any images that appear in the material being translated.</p>
        <p>For this reason, we recommend recording your language-specific images and screenshots directly after completing software GUI localisation and before you start work on localizing documentation.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
          Images and data
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
        <p>Images that contain text or other locale-dependent data will often need to be regenerated using translated text and/or data.  For example, help files for public transport software originally developed for the Austrian market may use the examples of "Hauptstraße" and "Marktplatz" in their data, which may need to change to "Main Street and "Market Square".  This may sometimes require generating new datasets for each locale.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
          Localise internal and external links
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse">
      <div class="panel-body">
        <p>Internal links should always bring you to the correct language version of the destination page.  External links should do the same where such language versions are available. Where external links are not available in the target language, the localiser will have to decide whether to link to the page at all, and if the link is to a site in a different language, it is a good rule of thumb always to warn the software or web user of that fact. A systematic check that this aspect of the localisation task is done in every case will usually need to be integrated into the Quality Assurance system.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
          Do it all again
        </a>
      </h4>
    </div>
    <div id="collapseSeven" class="panel-collapse collapse">
      <div class="panel-body">
        <p>During the next stage in the development cycle, new texts will be added to the software's user interface and will need localisation. Existing texts in the source language may need to be changed. Language Landscapes will have stored the currently existing translations in your company's translation memory for automatic translation in the next iteration.  As well as ensuring consistency over time, this approach saves you having to extract the limited number of new translations from the set of all localizables in order to avoid having to pay twice for texts that have already been translated.</p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
          Integrate localisation into your build process
        </a>
      </h4>
    </div>
    <div id="collapseEight" class="panel-collapse collapse">
      <div class="panel-body">
        <p>We can even integrate a fully automatic localisation loop into your software build process and configure it according to your needs, thus ensuring that your programs are already almost fully localised fresh off the press. We can also provide you with post-build statistics on how many of your texts still need localisation.  </p>
      </div>
    </div>
  </div>
</div>


