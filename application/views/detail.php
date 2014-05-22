<div class="awesome-bar" data-campaign="newrelic" style="background:#038D98;">
  <a class="awesome-bar_container" target="_blank" href="http://newrelic.com/lp/brand2?utm_source=SITE&utm_medium=banner_ad&utm_content=hellobar&utm_campaign=q2banners&mpc=BA-SITE-RPM-en-100-nerdlife-hellobar">
    <img class="awesome-bar_brand" src="http://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2013/09/NewRelic-logo-w.png" alt="New Relic" style="height:22px;">
    <span class="awesome-bar_message" style="color:#fff;">URGENT NERD ALERT: Optimize your apps now to get a nerdtastic t-shirt.</span>
    <span class="button small radius awesome-bar_action" style="background:#78cbd1;">nerd me now</span>
  </a>
  <span class="awesome-bar_close">x</span>
</div><main role="main" class="page page--primary category-javascript">

  <header role="banner" class="page_banner page_banner--category">
    <h2 class="page_banner_title">
      <a href="http://www.sitepoint.com/javascript/" class="page_banner_title_category"><i class="icon-category"></i>JavaScript</a>
          </h2>
    <div class="page_banner_adspot">
      <div class="widget maestro maestro-content-type-ad hide-for-mobile-SP" id="maestro-product-37"><!-- SP2013_Articles_728x90_1 -->
<div id="div-gpt-ad-article-header" style="width:728px; height:90px;" class="adspot">
    <script type="text/javascript">googletag.cmd.push(function() { googletag.display("div-gpt-ad-article-header"); });</script>
 </div></div>          </div>

    <div class="page_banner_divider-container">
      <hr/>
    </div>
  </header>

      <div class="page_content">
      <article class="article" id="post-81576">
        <header class="article_header">
          <h1 class="article_title">Flow Based Programming With NoFlo</h1>

          
    <div class="contributor article_contributor">

          <figure class="contributor_avatar">
      <a href="http://www.sitepoint.com/author/dnance/">
        <img alt='' src='http://1.gravatar.com/avatar/7ac4ffdab21aec303310f1edb712664e?s=96&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D96&amp;r=G' class='avatar avatar-96 photo' height='96' width='96' />      </a>
    </figure>
  
      <div class="contributor_details">
          <div class="contributor_name">
    <a href="http://www.sitepoint.com/author/dnance/">David Nance</a>
  </div>

        </div>

    </div>

    
          <div class="article_meta-data">
            <p class="article_pub-date">Published <time datetime="2014-05-21" pubdate>May 21, 2014</time></p>
          </div>
          <div class="article_header__buttons">
            
            <!-- make sure to update trackTweetsAndSubscriptions in scripts.js if the Tweet button DOM path changes in the future -->
            <a class="button small transparent radius twitter-share-button" target="_blank" href="https://twitter.com/share?text=Flow+Based+Programming+With+NoFlo&via=sitepointdotcom">
              <i class="icon-twitter"></i>
              Tweet
            </a>
            
            <!-- make sure to update trackTweetsAndSubscriptions in scripts.js if the Subscribe button DOM path changes in the future -->
            <a class="button small transparent radius subscribe-button" target="_blank" href="https://confirmsubscription.com/h/y/D46DD8C9BD8A0B5D">
              <!--<i class="icon-envelope-alt"></i>-->
              Subscribe
            </a>
            
          </div>

        </header>

        <section class="article_body">

            <p>It is amazing that with our lightning-fast technology cycle, a workflow born out of the era of bellbottoms and turntables is making a revival. Back in the 1970s, an ingenious engineer by the name of J. Paul Morrison crafted a banking system that resembled a common flowchart. His software concept was quietly credited for having the ability to stream complex logic visually, in a way that could be grasped by non-technical personnel. Years later, a movement is surging that professionals in the technology industry would be wise to pay attention to. This article explores Flow Based Programming, or FBP.</p>
<h2 id="the-gist">The Gist</h2>
<p>Since the moment when Morrison&#8217;s FBP banking system first came to fruition, little has been officially mentioned regarding the disruptive concept. However, FBP had actually been popping up in industries away from the software development epicenter: visual effects, film, artificial intelligence, enthusiast programming, etc.</p>
<p>The need for visually-appealing program flow, and a step away from object-oriented programming seems like steps towards more understandable, flexible code. Why then, has FBP been slow to reach universal acceptance among designers, product managers, and most importantly, developers?</p>
<p>There is growing evidence that this unanswered question may have been successfully dealt with via the advent of the Flowhub network, and specifically NoFlo for Javascript.</p>
<h2 id="noflo">NoFlo</h2>
<p>Highly-lauded tinkerer <a href="https://twitter.com/bergie">Henri Bergius</a>, and Meemoo creator <a href="http://www.forresto.com/">Forrest Oliphant</a> formed two crucial pieces of a <a href="https://www.kickstarter.com/projects/noflo/noflo-development-environment">Kickstarter</a> that gained tremendous support worldwide. The <a href="http://noflojs.org/">NoFlo</a> project, while ambitious, had a few traits that set it apart from Yahoo Pipes, Quartz Composer, and other successful but limited FBP-like systems of the past:</p>
<ul>
<li>NoFlo&#8217;s graphs can be created via JSON.</li>
<li>While the hosted infrastructure is closed, the underlying programming framework is open source.</li>
<li>The UI does not generate any of its own code.</li>
<li>In addition to the NoFlo/JavaScript runtime, similar runtimes are being built for Java, Objective-C, and other languages.</li>
<li>Custom components can be created and tested for any purpose.</li>
</ul>
<p>Flowhub&#8217;s programs arrange logic into &#8220;graphs&#8221; whose &#8220;nodes&#8221; serve as program components. Nodes are setup to react to Incoming Information Packets (IIPs), such that a node receives and then outputs actions based on the component type. The majority of the time in OOP, developers are concerned about how components are going to communicate, whereas with FBP, the only concern involves which components to connect. A quote from NoFlo&#8217;s original Kickstarter page summed up a version of the <a href="http://en.wikipedia.org/wiki/The_Mythical_Man-Month">Mythical Man Month</a> quite well:</p>
<blockquote>
<p>&#8220;That&#8217;s what building software is; it&#8217;s how much scaffolding you can erect before it collapses of its own weight&#8230; It doesn&#8217;t matter how many people you have working on it&#8230; A software development project gets to a certain size where you add one more person, the amount of energy to communicate with that person is actually greater than their net contribution to the project so it slows down.&#8221; &#8211; Steve Jobs</p>
</blockquote>
<p>NoFlo components can react to varying inputs, including HTTP requests and APIs, and can output to different targets, such as databases. You can even integrate a NoFlo graph into an existing JavaScript project by using a Node.js library. This flow challenges the one-step-at-a-time paradigm that governs most programming logic, especially when we consider the vast amount of input/output, and bloated data sources that modern interfaces deal with as they grow larger.</p>
<p>The insecurity that this philosophical shift creates among developers is palpable and understandable. What if the job of the developer were to be eliminated, only to be swallowed up by designers and product managers who could easily understand how to connect pieces of cookie-cutter components that fit every task imaginable? In the end, however, it may be that the flexibility of FBP has benefits that far outweigh any consequences to the software development industry. There are also questions of building custom components, implementing FBP with existing code, and potential user-interface limitations due to the visual nature of this kind of programming.</p>
<h2 id="case-study">Case Study</h2>
<p>Let&#8217;s embark on a quick experiment with NoFlo&#8217;s FBP to find out about the interface firsthand. Signup requires a GitHub account, leading to the option of seamless deployment to a repository. Depending on the runtimes that you have available on your plan, the interface may vary:</p>
<p><img src="http://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2014/05/1400635301Flowhub-interface.png" alt="Flowhub Interface" width="600" height="445" class="alignnone size-full wp-image-81581" /></p>
<p>A handy map gives you bearings when you&#8217;ve zoomed to a level where only pieces of your entire network can be seen. This feature and other methods of navigation would be crucial on complex flows that could literally take up buildings of readable space. For this reason, scaling is as easy as a pad swipe or a finger-pinch (touch) away.</p>
<p><img src="http://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2014/05/1400635397Flowhub-layout.png" alt="Flowhub Layout" width="605" height="329" class="alignnone size-full wp-image-81582" /></p>
<p>Moving the viewable area around takes a <em>click-hold-drag</em> action or similar touch action, and all-in-all, movement across the interface is intuitive. The search bar, when clicked, lists all the ready-made components, spanning from CSS elements and actions, to simple database calls, to common math functions and drawing features. </p>
<p>Currently, you can preview your output in a browser, as well as build and test custom components, through a text-editor interface:</p>
<p><img src="http://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2014/05/1400635454Flowhub-editor.png" alt="Flowhub Editor" width="612" height="294" class="alignnone size-full wp-image-81583" /></p>
<h2 id="conclusion">Conclusion</h2>
<p>Once I developed a feel for initiating IPs, and laying aside worries about text, the visual approach lent itself to a certain freedom. Had the project had more layers of complexity, I sense there may have been an even greater concept for the physical logic flow in the program. Collaboratively, this visual depiction looks like a sketch, or some graphical pseudo code that some developers use to outline the basic flow of a program before we translate it into a specific language. As seems to increasingly be the case in many disciplines, one can imagine a world with far less text and far more pictures.</p>
<p>Experiment with the <a href="https://github.com/sitepoint-examples/noflojs_tut-casestudy_sample">project code</a> or <a href="http://app.flowhub.io/#project/test3/sp6sa">in the browser</a> (once signed-in with Github).</p>

        </section>

        <div class="article__author-bios">
          
    <div class="contributor contributor--large">

          <figure class="contributor_avatar">
      <a href="http://www.sitepoint.com/author/dnance/">
        <img alt='' src='http://1.gravatar.com/avatar/7ac4ffdab21aec303310f1edb712664e?s=96&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D96&amp;r=G' class='avatar avatar-96 photo' height='96' width='96' />      </a>
    </figure>
  
      <div class="contributor_details">

          <div class="contributor_name">
    <a href="http://www.sitepoint.com/author/dnance/">David Nance</a>
  </div>

  
        <p class="contributor_longdesc">As a technical copywriter, David Nance writes Mother-approved user manuals and online documentation for tech companies. As a coder, he looks for solutions in game excitement, self-organized systems, and end-user behavior. David and his family reside in Las Vegas, Nevada.</p>

        <ul class="contributor_social">
                  </ul>
      </div>
    </div>

          </div>

                  <div class="related-content">
            <h2>Related Articles</h2>
            <ul class="article-list article-list--related">
              <li class="article-list_item  tile post-tile">
  <article class="article article--micro article--micro--related category-programming " data-disqus-id="http://www.sitepoint.com/what-makes-website-high-performance/">
    <header class="article_category"><h2 class="article_category_title"><a href="http://www.sitepoint.com/programming/">Programming</a></h2></header>
    
    <section class="article_header">
      <h1 class="article_title"><a href="http://www.sitepoint.com/what-makes-website-high-performance/">Understanding Browser Performance</a></h1>
      <div class="contributor article_contributor">
        <p class="contributor_name article_author-name">by <a href="http://www.sitepoint.com/author/jholmes/">Josh Holmes</a></p>
      </div>
      
      <div class="article_meta-data"><p class="article_pub-date"><time datetime="2013-12-03 06:05:49" pubdate>Dec 03, 2013</time></p></div>
      </section>
  </article>
</li><li class="article-list_item  tile post-tile">
  <article class="article article--micro article--micro--related category-javascript " data-disqus-id="http://www.sitepoint.com/write-3d-soft-engine-scratch-part-6/">
    <header class="article_category"><h2 class="article_category_title"><a href="http://www.sitepoint.com/javascript/">JavaScript</a></h2></header>
    
    <section class="article_header">
      <h1 class="article_title"><a href="http://www.sitepoint.com/write-3d-soft-engine-scratch-part-6/">Write a 3D Soft Engine from Scratch: Part 6</a></h1>
      <div class="contributor article_contributor">
        <p class="contributor_name article_author-name">by <a href="http://www.sitepoint.com/author/drousset/">David Rousset</a></p>
      </div>
      
      <div class="article_meta-data"><p class="article_pub-date"><time datetime="2013-10-24 06:31:32" pubdate>Oct 24, 2013</time></p></div>
      </section>
  </article>
</li><li class="article-list_item  tile post-tile">
  <article class="article article--micro article--micro--related category-programming " data-disqus-id="http://www.sitepoint.com/rails-4-with-andy-hawthorne-glenn-goodrich-the-transcript/">
    <header class="article_category"><h2 class="article_category_title"><a href="http://www.sitepoint.com/programming/">Programming</a></h2></header>
    
    <section class="article_header">
      <h1 class="article_title"><a href="http://www.sitepoint.com/rails-4-with-andy-hawthorne-glenn-goodrich-the-transcript/">Rails 4 with Andy Hawthorne and Glenn Goodrich - The Transcript</a></h1>
      <div class="contributor article_contributor">
        <p class="contributor_name article_author-name">by <a href="http://www.sitepoint.com/author/HAWK/">Sarah Hawk</a></p>
      </div>
      
      <div class="article_meta-data"><p class="article_pub-date"><time datetime="2013-07-31 18:26:43" pubdate>Jul 31, 2013</time></p></div>
      </section>
  </article>
</li>          </ul>
        </div>
        
        <div class="promo-panel">
          <div class="widget maestro maestro-content-type-product " id="maestro-product-29"><div class="promo-panel_media-object"><img src="https://d2sis3lil8ndrq.cloudfront.net/books/jshtml-basics1_medium_3d.png" /></div>
<div class="promo-panel_content">
  <h1 class="promo-panel_title">
    Free book: Jump Start HTML5 Basics
  </h1>
  <p>Grab a free copy of one our latest ebooks! Packed with hints and tips on HTML5's most powerful new features.</p>
  <form class="promo-panel_action"><input type="email" name="email" class="promo-panel_email" placeholder="email address" /><input type="hidden" name="content" value="29" /><button class="button radius">Claim Book</button></form>
</div></div>        </div>

                
        <a id="comments"></a>
        
<div id="disqus_thread">
    </div>
</article>
</div>
</main>
