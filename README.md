#db8 HREFLang correction (for Joomla 3.x)
This Joomla 3 system plugin corrects the Hreflang tag in your Joomla site.

##The Hreflang tag
To determine the **Language + Locales** (target audiencce) of your website, the **Hreflang** tag is used 
in the HTML source code of your website. 

You can have an English language website, but targeted at a specific area: 
* en-GB - English language for the Great Britain area
* en-US - English language for the United States area
* en-CA - English language for the Canadian area
* en-AU - English language for the Australian area

##Incorrect hreflang implementation
**Some language packs, like Arabic, have no valid Locale tag.** 
If you have a Joomla website with the ar-AA Arabic language pack 
and your using [Google Webmasters Tools](https://www.google.com/webmasters/tools/home)
then you might have had a warning about wrong hreflang tag.

> From: Google Search Console Team <sc-noreply@google.com>
> Subject: Incorrect hreflang implementation on http://www.example.com/
>
> Search Console
> Incorrect hreflang implementation on http://www.example.com/
>  
> To: Webmaster of http://www.example.com/,
>
> Google has detected that some pages on your site have implemented the rel-alternate-hreflang tag incorrectly. 
> In particular, there seems to be a problem with incorrect language and region codes, or incorrect bi-directional 
> linking (if page A links with hreflang to page B, there must be a link back from B to A as well). Google uses 
> the hreflang attributes to serve the correct language or regional URL to the right users in search results.
>  
> Until you correct the errors on the hreflang links, your website will not benefit from additional 
> language or region targeting.
>
> Fix this problem now:
> Find incorrect hreflang implementations
> Use the examples provided in the International Targeting feature in Search Console to get a sample of pages 
> with incorrect hreflang implementation.
>	

##Fix incorrect hreflang
You can manually change the Hreflang tag in the **Language Pack** of your site **and** in the Extensions > Language > 
**Content Language** of your site. However **next language pack update will be a problem**.

This plugin replaces the set hreflang tag retrieved from your content language with a hreflang tag of your choosing.
When a page is displayed the plugin looks in the HTML source for a language tag, e.g. ar-AA and replaces it with 
the language tag of your preference (e.g. ar-EG for Arabic Language for Locale Egypt).

