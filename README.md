Drupal Anakin theme
===================================

#############################################
# Decisions as development progresses       #
#############################################


- Personally don't like sidebar-first or sidebar-last as it implies that there
  can be sidebar left and/or right, and it also makes it difficult to follow
  correct symantics when for instance we need 2 sidebars on the right or left.
  Certainly across different page types. (would result in complex mixins)
  ==> Anakin policy: Panels is used to fill in the content and layout.


- how to handle the menu's in the page.tpl. You can do what you want in the
  subtheme but some functionality could be built to ship the default theme in
  a certain state, E.G. Create a sniffer for the main menu, footer menu, etc ...
  keeping in mind the languages enabled for the site.

- reset.css for drupal default styling? which is actually a kind of reset.


#############################################
# Questions on Ocelot                       #
#############################################


 - Why do they have omega as base theme for their base theme? I would like to
   understand the advantages or that approach as well as the disadvantages.

- Review the preprocessors E.G (head tags, breakpoints, favicons, ...)