# Highlight.js, TYPO3 Extension

Create a Highlight.js element in TYPO3

For administrators
------------------
The extension needs to be installed as any other extension of TYPO3 CMS:

1. Switch on the **Extensions** module
2. On the upper left corner select the **"Get Extensions"** from the select menu
3. On the search bar, type: **highlight_js**
4. Click on the cloud icon and download the extension

Preparation: Include static TypoScript
----------------------

The extension ships some TypoScript code which needs to be included.

1. Switch on the **Template module**
2. Go to your root page
3. Switch to the **Edit the whole template record**
4. Switch to the **Includes** tab
5. Choose the **Highlight.js TypoScript** static template
6. Save and close your settings

Include PageTS
----------------------

The extension ships TSConfig too:

1. Switch to your root page
2. Edit the page
3. Switch to Resources
4. Include **Highlight.js - PageTS**
6. Save

Apply your own templates
----------------------

Define on your TypoScript file the path that your templates are located.

   	tt_content {
      	highlight_js {
			templateRootPaths.500 = EXT:yourExtention/Resources/Private/Templates/
			partialRootPaths.500 = EXT:yourExtention/Resources/Private/Partials/
			templateName = Highlight.html
		}
   	}
	
	
Apply Styles
----------------------
On the constants editor, you can find a list with the current implemented styles. Select one and see it rendered on the frontend.

For editors
------------------

1. Switch on the **Page** module
2. Choose the page on the Pagetree that you would like the content element to be placed
3. Click on the content button to create a new content element
4. Switch to **Highlight.js**
5. Choose your content element

For editors
------------------

Since Highlight.js supports a load of languages, i can not include them all at once so if you want more styles or languages to be included, create an issue in order to get them asap included.

In case you have the TypoScript and FLUID language definitions, please submit them here so i will be able to add them on the extension:

https://github.com/highlightjs/highlight.js/issues/2030

