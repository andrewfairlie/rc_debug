Red Carrot Debug
========

Written by Andrew Fairlie from redcarrot.co.uk for the ExpressionEngine community.

An ExpressionEngine plugin that outputs useful data to help folks on StackExchange debug problems.

## Usage
- Add a new blank template including only `{exp:rc_debug}` to show all 
- View the page, enter the source code so that it is formatted correctly and copy the contents
- Paste into StackExchange, removing any elements you aren't comfortable with sharing

## Paramaters
- `include=""`: Pipe separated values of what sections you want to output. If left empty all sections will show. `installation|accessories|extensions|fieldtypes|modules|channels|templates|template_routes|status_groups`

## Future Improvements
- Member Groups Overview
- Config Variables Overview
- Multiple Site Manager Support
- Snippet Overview
- Global Variables Overview


## Etiquette
Because the output is quite long, please add your output to something like Github Gists and link to it, rather than copying it directly into your question.

## Example Output
See "example.md"

## Changelog
Added an "include" parameter so it's less spammy
