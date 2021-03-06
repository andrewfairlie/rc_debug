
Generated by rc_debug on 1394895294 by http://www.redcarrot.co.uk available for free on [Github](https://github.com/andrewfairlie/rc_debug)
## Installation 
- **ExpressionEngine Version:** 2.8.0 (20140228)
- **Themes Path:** /Users/andrew/Documents/Sites/loveashford.com/web/themes/
- **ExpressionEngine Folder Path:** /Users/andrew/Documents/sites/loveashford.com/system/expressionengine/
- **System Folder Path:** /Users/andrew/Documents/sites/loveashford.com/system/codeigniter/system/
- **Third Party Path:** /Users/andrew/Documents/Sites/loveashford.com/system/expressionengine/third_party/
- **Third Party Themes Path:** /Users/andrew/Documents/Sites/loveashford.com/web/themes/third_party/
- **Site Index:** /Users/andrew/Documents/Sites/loveashford.com/web/index.php


## Extensions 
- **Rte_ext / myaccount_nav_setup**
    - **ID:** 1
    - **Priority:** 10
    - **Hook:** myaccount_nav_setup
    - **Enabled:** y
    - **Version:** 1.0.1
- **Rte_ext / cp_menu_array**
    - **ID:** 2
    - **Priority:** 10
    - **Hook:** cp_menu_array
    - **Enabled:** y
    - **Version:** 1.0.1
- **Low_search_ext / entry_submission_end**
    - **ID:** 3
    - **Priority:** 101
    - **Hook:** entry_submission_end
    - **Enabled:** y
    - **Version:** 3.1.2
- **Low_search_ext / delete_entries_loop**
    - **ID:** 4
    - **Priority:** 10
    - **Hook:** delete_entries_loop
    - **Enabled:** y
    - **Version:** 3.1.2
- **Low_search_ext / channel_entries_query_result**
    - **ID:** 5
    - **Priority:** 10
    - **Hook:** channel_entries_query_result
    - **Enabled:** y
    - **Version:** 3.1.2
- **Low_search_ext / category_save**
    - **ID:** 6
    - **Priority:** 10
    - **Hook:** category_save
    - **Enabled:** y
    - **Version:** 3.1.2
- **Low_search_ext / category_delete**
    - **ID:** 7
    - **Priority:** 10
    - **Hook:** category_delete
    - **Enabled:** y
    - **Version:** 3.1.2
- **Adman_ext / **
    - **ID:** 8
    - **Priority:** 10
    - **Hook:** 
    - **Enabled:** y
    - **Version:** 1.0.7



## Field Types 
- **select**
    - **ID:** 1
    - **Version:** 1.0
- **text**
    - **ID:** 2
    - **Version:** 1.0
- **textarea**
    - **ID:** 3
    - **Version:** 1.0
- **date**
    - **ID:** 4
    - **Version:** 1.0
- **file**
    - **ID:** 5
    - **Version:** 1.0
- **grid**
    - **ID:** 6
    - **Version:** 1.0
- **multi_select**
    - **ID:** 7
    - **Version:** 1.0
- **checkboxes**
    - **ID:** 8
    - **Version:** 1.0
- **radio**
    - **ID:** 9
    - **Version:** 1.0
- **relationship**
    - **ID:** 10
    - **Version:** 1.0
- **rte**
    - **ID:** 11
    - **Version:** 1.0



## Modules 
- **Channel**
    - **ID:** 1
    - **Version:** 2.0.1
- **Member**
    - **ID:** 2
    - **Version:** 2.1
- **Stats**
    - **ID:** 3
    - **Version:** 2.0
- **Rte**
    - **ID:** 4
    - **Version:** 1.0.1
- **Low_search**
    - **ID:** 5
    - **Version:** 3.1.2
- **Adman**
    - **ID:** 6
    - **Version:** 1.0.7



## Channel Structure 
- **Shop**
    - **ID:** 1
    - **Name:** shop
    - **Category Group ID:** 1
    - **Status Group ID:** 2
    - **Default Status:** open
    - **Fields**
        - **Label:** Monday
            - **ID:** 2
            - **Name:** shop_monday
            - **Type:** text
            - **Required:** y
            - **Searchable:** n
        - **Label:** Tuesday
            - **ID:** 3
            - **Name:** shop_tuesday
            - **Type:** text
            - **Required:** y
            - **Searchable:** n
        - **Label:** Wednesday
            - **ID:** 4
            - **Name:** shop_wednesday
            - **Type:** text
            - **Required:** y
            - **Searchable:** n
        - **Label:** Thursday
            - **ID:** 5
            - **Name:** shop_thursday
            - **Type:** text
            - **Required:** y
            - **Searchable:** n
        - **Label:** Friday
            - **ID:** 6
            - **Name:** shop_friday
            - **Type:** text
            - **Required:** y
            - **Searchable:** n
        - **Label:** Saturday
            - **ID:** 7
            - **Name:** shop_saturday
            - **Type:** text
            - **Required:** y
            - **Searchable:** n
        - **Label:** Address Line 2
            - **ID:** 22
            - **Name:** shop_address-2
            - **Type:** text
            - **Required:** n
            - **Searchable:** n
        - **Label:** Sunday
            - **ID:** 9
            - **Name:** shop_sunday
            - **Type:** text
            - **Required:** y
            - **Searchable:** n
        - **Label:** Address Line 1
            - **ID:** 21
            - **Name:** shop_address-1
            - **Type:** text
            - **Required:** y
            - **Searchable:** n
        - **Label:** Postcode
            - **ID:** 20
            - **Name:** shop_postcode
            - **Type:** text
            - **Required:** y
            - **Searchable:** n
        - **Label:** Longitude
            - **ID:** 19
            - **Name:** shop_longitude
            - **Type:** text
            - **Required:** n
            - **Searchable:** n
        - **Label:** Latitude
            - **ID:** 18
            - **Name:** shop_latitude
            - **Type:** text
            - **Required:** n
            - **Searchable:** n
        - **Label:** Intro
            - **ID:** 17
            - **Name:** shop_intro
            - **Type:** textarea
            - **Required:** y
            - **Searchable:** y
        - **Label:** Excerpt
            - **ID:** 16
            - **Name:** shop_excerpt
            - **Type:** text
            - **Required:** y
            - **Searchable:** y
        - **Label:** Gallery
            - **ID:** 23
            - **Name:** shop_gallery
            - **Type:** grid
            - **Required:** y
            - **Searchable:** n
        - **Label:** Will you be offering Click and Collect?
            - **ID:** 26
            - **Name:** shop_cac
            - **Type:** radio
            - **Required:** y
            - **Searchable:** n
        - **Label:** External Click and Collect URL
            - **ID:** 33
            - **Name:** shop_ext-cac
            - **Type:** text
            - **Required:** n
            - **Searchable:** n
        - **Label:** Premium
            - **ID:** 41
            - **Name:** shop_premium
            - **Type:** select
            - **Required:** y
            - **Searchable:** n
        - **Label:** Keywords
            - **ID:** 42
            - **Name:** shop_keywords
            - **Type:** text
            - **Required:** n
            - **Searchable:** y
- **News**
    - **ID:** 2
    - **Name:** news
    - **Category Group ID:** 
    - **Status Group ID:** 2
    - **Default Status:** open
    - **Fields**
        - **Label:** Is this related to a shop?
            - **ID:** 24
            - **Name:** news_shop
            - **Type:** relationship
            - **Required:** n
            - **Searchable:** n
- **Event**
    - **ID:** 3
    - **Name:** event
    - **Category Group ID:** 2
    - **Status Group ID:** 2
    - **Default Status:** open
    - **Fields**
        - **Label:** Is this related to a shop?
            - **ID:** 25
            - **Name:** event_shop
            - **Type:** relationship
            - **Required:** n
            - **Searchable:** n
        - **Label:** Premium
            - **ID:** 43
            - **Name:** event_premium
            - **Type:** select
            - **Required:** y
            - **Searchable:** n
        - **Label:** Start date
            - **ID:** 44
            - **Name:** event_start
            - **Type:** date
            - **Required:** y
            - **Searchable:** y
        - **Label:** Excerpt
            - **ID:** 46
            - **Name:** event_excerpt
            - **Type:** text
            - **Required:** y
            - **Searchable:** n
        - **Label:** Image
            - **ID:** 47
            - **Name:** event_image
            - **Type:** file
            - **Required:** y
            - **Searchable:** n
- **Offer**
    - **ID:** 4
    - **Name:** offer
    - **Category Group ID:** 3
    - **Status Group ID:** 2
    - **Default Status:** open
    - **Fields**
        - **Label:** Premium
            - **ID:** 27
            - **Name:** offer_premium
            - **Type:** radio
            - **Required:** y
            - **Searchable:** y
        - **Label:** Terms
            - **ID:** 28
            - **Name:** offer_terms
            - **Type:** textarea
            - **Required:** n
            - **Searchable:** n
        - **Label:** Coupon Code
            - **ID:** 29
            - **Name:** offer_coupon
            - **Type:** text
            - **Required:** n
            - **Searchable:** n
        - **Label:** Shop
            - **ID:** 30
            - **Name:** offer_shop
            - **Type:** relationship
            - **Required:** y
            - **Searchable:** y
        - **Label:** Image
            - **ID:** 31
            - **Name:** offer_image
            - **Type:** file
            - **Required:** y
            - **Searchable:** n
        - **Label:** Excerpt
            - **ID:** 32
            - **Name:** offer_excerpt
            - **Type:** text
            - **Required:** y
            - **Searchable:** n
- **Product**
    - **ID:** 5
    - **Name:** product
    - **Category Group ID:** 
    - **Status Group ID:** 2
    - **Default Status:** open
    - **Fields**
        - **Label:** Is this related to a shop?
            - **ID:** 34
            - **Name:** product_shop
            - **Type:** relationship
            - **Required:** y
            - **Searchable:** y
        - **Label:** Premium
            - **ID:** 35
            - **Name:** product_premium
            - **Type:** select
            - **Required:** y
            - **Searchable:** n
        - **Label:** Cost
            - **ID:** 36
            - **Name:** product_cost
            - **Type:** text
            - **Required:** y
            - **Searchable:** n
        - **Label:** Excerpt
            - **ID:** 37
            - **Name:** product_excerpt
            - **Type:** text
            - **Required:** y
            - **Searchable:** n
        - **Label:** Gallery
            - **ID:** 38
            - **Name:** product_gallery
            - **Type:** grid
            - **Required:** y
            - **Searchable:** n
        - **Label:** Description
            - **ID:** 39
            - **Name:** product_description
            - **Type:** textarea
            - **Required:** y
            - **Searchable:** n



## Templates 
- **_home**
    - **Site Default:** y
    - **ID:** 2
    - **Templates**
        - **Name:** index
            - **ID:** 3
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
- **_layouts**
    - **Site Default:** n
    - **ID:** 1
    - **Templates**
        - **Name:** index
            - **ID:** 2
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
        - **Name:** shop
            - **ID:** 8
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
- **control**
    - **Site Default:** n
    - **ID:** 10
    - **Templates**
        - **Name:** shop
            - **ID:** 25
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
- **offers**
    - **Site Default:** n
    - **ID:** 9
    - **Templates**
        - **Name:** index
            - **ID:** 24
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
- **events**
    - **Site Default:** n
    - **ID:** 8
    - **Templates**
        - **Name:** index
            - **ID:** 22
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
- **shopping**
    - **Site Default:** n
    - **ID:** 7
    - **Templates**
        - **Name:** index
            - **ID:** 20
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
- **test**
    - **Site Default:** n
    - **ID:** 6
    - **Templates**
        - **Name:** index
            - **ID:** 17
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
- **_embeds**
    - **Site Default:** n
    - **ID:** 5
    - **Templates**
        - **Name:** offer
            - **ID:** 14
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
        - **Name:** offers
            - **ID:** 15
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
        - **Name:** products
            - **ID:** 16
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
        - **Name:** index
            - **ID:** 18
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
        - **Name:** shops
            - **ID:** 21
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
        - **Name:** events
            - **ID:** 23
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
- **feeds**
    - **Site Default:** n
    - **ID:** 4
    - **Templates**
        - **Name:** sitemap
            - **ID:** 13
            - **Saved:** y
            - **Type:** xml
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
        - **Name:** index
            - **ID:** 19
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
- **shop**
    - **Site Default:** n
    - **ID:** 3
    - **Templates**
        - **Name:** index
            - **ID:** 4
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
        - **Name:** offers-index
            - **ID:** 9
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
        - **Name:** offers-single
            - **ID:** 10
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
        - **Name:** products-index
            - **ID:** 11
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
        - **Name:** products-single
            - **ID:** 12
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o
- **debug**
    - **Site Default:** n
    - **ID:** 11
    - **Templates**
        - **Name:** index
            - **ID:** 26
            - **Saved:** y
            - **Type:** webpage
            - **Cache:** n
            - **Refresh:** 0
            - **PHP:** n
            - **PHP Parse Order:** o



## Template Routes 
- **Template ID:** 4
    - **Configured Route:** /shop/{shop}
- **Template ID:** 10
    - **Configured Route:** /offer/{shop}/{offer}
- **Template ID:** 12
    - **Configured Route:** /product/{shop}/{product}
- **Template ID:** 11
    - **Configured Route:** /products/{shop}
- **Template ID:** 9
    - **Configured Route:** /offers/{shop}



## Status Groups 
- **Statuses:** ID 1
    - **Name:** open
    - **Name:** closed
- **Love Ashford:** ID 2
    - **Name:** open
    - **Name:** closed
    - **Name:** Awaiting Approval



