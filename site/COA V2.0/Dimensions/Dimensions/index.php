<?php
	session_start();
	if (!$_SESSION['login']) {
		$dirname = $_SERVER['REQUEST_URI'];

		if (substr($dirname, -1) != '/') {
			$dirname=dirname($dirname).'/';
		} else {
			$dirname = preg_replace('~/+~', '/', $dirname);
		}

		header("Location: ".$dirname."../login.php?redirect=COA V2.0\Dimensions\Dimensions\index.php");
	}
?>




<!doctype html>
<html lang="en" class="no-js">
  <head>
    
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      
      
      
      
        <meta name="lang:clipboard.copy" content="Copy to clipboard">
      
        <meta name="lang:clipboard.copied" content="Copied to clipboard">
      
        <meta name="lang:search.language" content="en">
      
        <meta name="lang:search.pipeline.stopwords" content="True">
      
        <meta name="lang:search.pipeline.trimmer" content="True">
      
        <meta name="lang:search.result.none" content="No matching documents">
      
        <meta name="lang:search.result.one" content="1 matching document">
      
        <meta name="lang:search.result.other" content="# matching documents">
      
        <meta name="lang:search.tokenizer" content="[\s\-]+">
      
      <link rel="shortcut icon" href="../../../assets/images/favicon.png">
      <meta name="generator" content="mkdocs-1.0.4, mkdocs-material-4.6.3">
    
    
      
        <title>Dimensions - COA Documentation</title>
      
    
    
      <link rel="stylesheet" href="../../../assets/stylesheets/application.adb8469c.css">
      
      
    
    
      <script src="../../../assets/javascripts/modernizr.86422ebf.js"></script>
    
    
      
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700%7CRoboto+Mono&display=fallback">
        <style>body,input{font-family:"Roboto","Helvetica Neue",Helvetica,Arial,sans-serif}code,kbd,pre{font-family:"Roboto Mono","Courier New",Courier,monospace}</style>
      
    
    <link rel="stylesheet" href="../../../assets/fonts/material-icons.css">
    
    
    
      
    
    
  </head>
  
    <body dir="ltr">
  
    <svg class="md-svg">
      <defs>
        
        
      </defs>
    </svg>
    <input class="md-toggle" data-md-toggle="drawer" type="checkbox" id="__drawer" autocomplete="off">
    <input class="md-toggle" data-md-toggle="search" type="checkbox" id="__search" autocomplete="off">
    <label class="md-overlay" data-md-component="overlay" for="__drawer"></label>
    
      <a href="#crowe-operational-analytics" tabindex="0" class="md-skip">
        Skip to content
      </a>
    
    
      <header class="md-header" data-md-component="header">
  <nav class="md-header-nav md-grid">
    <div class="md-flex">
      <div class="md-flex__cell md-flex__cell--shrink">
        <a href="../../.." title="COA Documentation" aria-label="COA Documentation" class="md-header-nav__button md-logo">
          
            <i class="md-icon"></i>
          
        </a>
      </div>
      <div class="md-flex__cell md-flex__cell--shrink">
        <label class="md-icon md-icon--menu md-header-nav__button" for="__drawer"></label>
      </div>
      <div class="md-flex__cell md-flex__cell--stretch">
        <div class="md-flex__ellipsis md-header-nav__title" data-md-component="title">
          
            <span class="md-header-nav__topic">
              COA Documentation
            </span>
            <span class="md-header-nav__topic">
              
                Dimensions
              
            </span>
          
        </div>
      </div>
      <div class="md-flex__cell md-flex__cell--shrink">
        
          <label class="md-icon md-icon--search md-header-nav__button" for="__search"></label>
          
<div class="md-search" data-md-component="search" role="dialog">
  <label class="md-search__overlay" for="__search"></label>
  <div class="md-search__inner" role="search">
    <form class="md-search__form" name="search">
      <input type="text" class="md-search__input" aria-label="search" name="query" placeholder="Search" autocapitalize="off" autocorrect="off" autocomplete="off" spellcheck="false" data-md-component="query" data-md-state="active">
      <label class="md-icon md-search__icon" for="__search"></label>
      <button type="reset" class="md-icon md-search__icon" data-md-component="reset" tabindex="-1">
        &#xE5CD;
      </button>
    </form>
    <div class="md-search__output">
      <div class="md-search__scrollwrap" data-md-scrollfix>
        <div class="md-search-result" data-md-component="result">
          <div class="md-search-result__meta">
            Type to start searching
          </div>
          <ol class="md-search-result__list"></ol>
        </div>
      </div>
    </div>
  </div>
</div>
        
      </div>
      
    </div>
  </nav>
</header>
    
    <div class="md-container">
      
        
      
      
        

  

<nav class="md-tabs md-tabs--active" data-md-component="tabs">
  <div class="md-tabs__inner md-grid">
    <ul class="md-tabs__list">
      
        
  <li class="md-tabs__item">
    
      <a href="../../.." class="md-tabs__link">
        Home
      </a>
    
  </li>

      
        
  
  
    
    
  
  
    <li class="md-tabs__item">
      
        <a href="../../Data models/Data models/" class="md-tabs__link">
          COA V2.0
        </a>
      
    </li>
  

  

      
        
  
  
    
    
  
  
    <li class="md-tabs__item">
      
        <a href="../../../COA V2.0 Technical/Datawarehouse/Introduction/" class="md-tabs__link">
          COA V2.0 Technical
        </a>
      
    </li>
  

  

      
    </ul>
  </div>
</nav>
      
      <main class="md-main" role="main">
        <div class="md-main__inner md-grid" data-md-component="container">
          
            
              <div class="md-sidebar md-sidebar--primary" data-md-component="navigation">
                <div class="md-sidebar__scrollwrap">
                  <div class="md-sidebar__inner">
                    <nav class="md-nav md-nav--primary" data-md-level="0">
  <label class="md-nav__title md-nav__title--site" for="__drawer">
    <a href="../../.." title="COA Documentation" class="md-nav__button md-logo">
      
        <i class="md-icon"></i>
      
    </a>
    COA Documentation
  </label>
  
  <ul class="md-nav__list" data-md-scrollfix>
    
      
      
      


  <li class="md-nav__item">
    <a href="../../.." title="Home" class="md-nav__link">
      Home
    </a>
  </li>

    
      
      
      

  


  <li class="md-nav__item md-nav__item--active md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-2" type="checkbox" id="nav-2" checked>
    
    <label class="md-nav__link" for="nav-2">
      COA V2.0
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="1">
      <label class="md-nav__title" for="nav-2">
        COA V2.0
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-2-1" type="checkbox" id="nav-2-1">
    
    <label class="md-nav__link" for="nav-2-1">
      Data models
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="2">
      <label class="md-nav__title" for="nav-2-1">
        Data models
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../../Data models/Data models/" title="Data models" class="md-nav__link">
      Data models
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

        
          
          
          

  


  <li class="md-nav__item md-nav__item--active md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-2-2" type="checkbox" id="nav-2-2" checked>
    
    <label class="md-nav__link" for="nav-2-2">
      Dimensions
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="2">
      <label class="md-nav__title" for="nav-2-2">
        Dimensions
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          

  


  <li class="md-nav__item md-nav__item--active">
    
    <input class="md-toggle md-nav__toggle" data-md-toggle="toc" type="checkbox" id="__toc">
    
      
    
    
    <a href="./" title="Dimensions" class="md-nav__link md-nav__link--active">
      Dimensions
    </a>
    
  </li>

        
      </ul>
    </nav>
  </li>

        
          
          
          


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-2-3" type="checkbox" id="nav-2-3">
    
    <label class="md-nav__link" for="nav-2-3">
      Introduction
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="2">
      <label class="md-nav__title" for="nav-2-3">
        Introduction
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../../Introduction/Introduction/" title="Introduction" class="md-nav__link">
      Introduction
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

        
          
          
          


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-2-4" type="checkbox" id="nav-2-4">
    
    <label class="md-nav__link" for="nav-2-4">
      Visualizations
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="2">
      <label class="md-nav__title" for="nav-2-4">
        Visualizations
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../../Visualizations/Visualizations/" title="Visualizations" class="md-nav__link">
      Visualizations
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

        
      </ul>
    </nav>
  </li>

    
      
      
      


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-3" type="checkbox" id="nav-3">
    
    <label class="md-nav__link" for="nav-3">
      COA V2.0 Technical
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="1">
      <label class="md-nav__title" for="nav-3">
        COA V2.0 Technical
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-3-1" type="checkbox" id="nav-3-1">
    
    <label class="md-nav__link" for="nav-3-1">
      Datawarehouse
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="2">
      <label class="md-nav__title" for="nav-3-1">
        Datawarehouse
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../../../COA V2.0 Technical/Datawarehouse/Introduction/" title="Introduction" class="md-nav__link">
      Introduction
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

        
          
          
          


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-3-2" type="checkbox" id="nav-3-2">
    
    <label class="md-nav__link" for="nav-3-2">
      ETL framework
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="2">
      <label class="md-nav__title" for="nav-3-2">
        ETL framework
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../../../COA V2.0 Technical/ETL framework/Introduction/" title="Introduction" class="md-nav__link">
      Introduction
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

        
          
          
          


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-3-3" type="checkbox" id="nav-3-3">
    
    <label class="md-nav__link" for="nav-3-3">
      How to's FAQ
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="2">
      <label class="md-nav__title" for="nav-3-3">
        How to's FAQ
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../../../COA V2.0 Technical/How to's FAQ/Introduction/" title="Introduction" class="md-nav__link">
      Introduction
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

        
          
          
          


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-3-4" type="checkbox" id="nav-3-4">
    
    <label class="md-nav__link" for="nav-3-4">
      Product
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="2">
      <label class="md-nav__title" for="nav-3-4">
        Product
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../../../COA V2.0 Technical/Product/Introduction/" title="Introduction" class="md-nav__link">
      Introduction
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

        
          
          
          


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-3-5" type="checkbox" id="nav-3-5">
    
    <label class="md-nav__link" for="nav-3-5">
      Technical documentation
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="2">
      <label class="md-nav__title" for="nav-3-5">
        Technical documentation
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../../../COA V2.0 Technical/Technical documentation/Introduction/" title="Introduction" class="md-nav__link">
      Introduction
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

        
          
          
          


  <li class="md-nav__item md-nav__item--nested">
    
      <input class="md-toggle md-nav__toggle" data-md-toggle="nav-3-6" type="checkbox" id="nav-3-6">
    
    <label class="md-nav__link" for="nav-3-6">
      Technical reference
    </label>
    <nav class="md-nav" data-md-component="collapsible" data-md-level="2">
      <label class="md-nav__title" for="nav-3-6">
        Technical reference
      </label>
      <ul class="md-nav__list" data-md-scrollfix>
        
        
          
          
          


  <li class="md-nav__item">
    <a href="../../../COA V2.0 Technical/Technical reference/Introduction/" title="Introduction" class="md-nav__link">
      Introduction
    </a>
  </li>

        
      </ul>
    </nav>
  </li>

        
      </ul>
    </nav>
  </li>

    
  </ul>
</nav>
                  </div>
                </div>
              </div>
            
            
              <div class="md-sidebar md-sidebar--secondary" data-md-component="toc">
                <div class="md-sidebar__scrollwrap">
                  <div class="md-sidebar__inner">
                    
<nav class="md-nav md-nav--secondary">
  
  
    
  
  
</nav>
                  </div>
                </div>
              </div>
            
          
          <div class="md-content">
            <article class="md-content__inner md-typeset">
              
                
                
                <h1 id="crowe-operational-analytics">Crowe operational analytics<a class="headerlink" href="#crowe-operational-analytics" title="Permanent link">&para;</a></h1>
<hr />
<h1 id="coa-introduction">COA Introduction<a class="headerlink" href="#coa-introduction" title="Permanent link">&para;</a></h1>
<p>Crowe Operational Analytics is a robust enterprise reporting and analytics solution designed by a team of seasoned functional and technical professionals with deep expertise in analytics and in the manufacturing and metals industry.  </p>
<p>Metals companies' transactional data hidden just below the surface can provide the intelligence and insight required to make the right critical business decisions.  Crowe Operational Analytics provides the ability to extract this intelligence, enabling companies to maximize margin and minimize cost, uncover root causes of product quality issues, compare customer trends across different products, alloys, and specifications.</p>
<p>The tool displays these insights with out-of-the-box dashboards using Microsoft Power BI, a Gartner Magic Quadrant leader. With a dashboard for each area of your business, you have the ability to filter and refine the data by business, location, alloy, grade, shape, and more.  Quickly understand the latest sales trends and customer demand using your critical attributes. Drill down to uncover new opportunities for production optimization or identify quality-issue root causes.</p>
<p>The COA analytics solution consists of three components:</p>
<ul>
<li>Kimball-style data warehouse hosted in Azure</li>
<li>Advanced reporting data models</li>
<li>Power BI dashboards and reports</li>
</ul>
<p><img alt="Screenshot" src="img/Image1.png" /></p>
<h1 id="microsoft-power-bi">Microsoft Power BI<a class="headerlink" href="#microsoft-power-bi" title="Permanent link">&para;</a></h1>
<p>Power BI is a business analytics solution that lets you visualize your data and share insights across your organization, or embed them in your app or website. Connect to hundreds of data sources and bring your data to life with live dashboards and reports. </p>
<p>Power BI consists of:</p>
<ul>
<li>A Windows desktop application called Power BI Desktop.</li>
<li>An online SaaS (Software as a Service) service called the Power BI Service.</li>
<li>Power BI Mobile Apps for Windows, iOS, and Android devices.</li>
</ul>
<p><img alt="Screenshot" src="img/power-bi-overview-blocks.png" /></p>
                
                  
                
                
              
              
                


              
            </article>
          </div>
        </div>
      </main>
      
        
<footer class="md-footer">
  
    <div class="md-footer-nav">
      <nav class="md-footer-nav__inner md-grid">
        
          <a href="../../Data models/Data models/" title="Data models" class="md-flex md-footer-nav__link md-footer-nav__link--prev" rel="prev">
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-back md-footer-nav__button"></i>
            </div>
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Previous
                </span>
                Data models
              </span>
            </div>
          </a>
        
        
          <a href="../../Introduction/Introduction/" title="Introduction" class="md-flex md-footer-nav__link md-footer-nav__link--next" rel="next">
            <div class="md-flex__cell md-flex__cell--stretch md-footer-nav__title">
              <span class="md-flex__ellipsis">
                <span class="md-footer-nav__direction">
                  Next
                </span>
                Introduction
              </span>
            </div>
            <div class="md-flex__cell md-flex__cell--shrink">
              <i class="md-icon md-icon--arrow-forward md-footer-nav__button"></i>
            </div>
          </a>
        
      </nav>
    </div>
  
  <div class="md-footer-meta md-typeset">
    <div class="md-footer-meta__inner md-grid">
      <div class="md-footer-copyright">
        
        powered by
        <a href="https://www.mkdocs.org" target="_blank" rel="noopener">MkDocs</a>
        and
        <a href="https://squidfunk.github.io/mkdocs-material/" target="_blank" rel="noopener">
          Material for MkDocs</a>
      </div>
      
    </div>
  </div>
</footer>
      
    </div>
    
      <script src="../../../assets/javascripts/application.c33a9706.js"></script>
      
      <script>app.initialize({version:"1.0.4",url:{base:"../../.."}})</script>
      
    
  </body>
</html>