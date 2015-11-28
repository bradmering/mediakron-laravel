var Mediakron={
    "Name":     "{{ $site->title }}",
    "Settings": {
        "name":         "{{ $site->title }}",
        "uri":          "{{ $site->uri }}",
        "subtitle":     "{{ $site->subtitle }}",
        "copyright":    "{{ $site->copyright }}",
        "version":      "{{ mediakron_version }}",
        "url":          "{{ url('site', { 'uri': $site->uri })|raw }}",
        "ga":           "{{ $site->ga }}",
        "pushState":    false,
        "cssURL":       "/mediakron/css/",
        "layout":       "default",
        "institution":  "Boston College",
        "search":       "internal",
        "commenting":   {% if $site->comment %}true{% else %}false{% endif %},
        "download":     {% if $site->download %}true{% else %}false{% endif %},
        "showauthor":   {% if $site->showAuthor %}true{% else %}false{% endif %},
        "showview":     {% if $site->showView %}true{% else %}false{% endif %},
        "public":       {% if $site->public %}true{% else %}false{% endif %},
        "filepath":     "/files/{{ $site->uri }}/",
        "appPath":      "{{ url('site', { 'uri': $site->uri })|raw }}/mediakron/",
        "basepath":     "{{ path('site', { 'uri': $site->uri })|raw }}/",
        "device":       "desktop",
        "token":        "{{ token }}",
        "welcome":      false,
        "Navigation": {
            "primary":      {{ $site->primaryNav|json_encode()|raw }},
            "secondary":    {{ secondary|json_encode()|raw }}
        },
        "HomePage": {
            "image":        "{{ $site->homepageImage }}",
            "alt":          "{{ $site->homepageImageAlt }}",
            "description":  "{{ $site->homepageDescription }}",
            "item":         "{{ $site->homepageItem }}",
            "layout":       "{% if $site->homepageLayout is not empty %}{{ $site->homepageLayout }}{% else %}basic{% endif %}",
            "options": {
                "nobanner": {
                    "id":       "nobanner",
                    "title":    "Full Background Image",
                    "icon": "/mediakron/css/img/layout-icons/homepage-full.png",
                    "help":     "Centered title and subtitle over background image. Site description displays below, if present.",
                    "classes":  "body-homepage body-homepage-nobanner"
                },
                "half": {
                    "id":       "half",
                    "title":    "Half-page Background Image",
                    "icon": "/mediakron/css/img/layout-icons/homepage-half.png",
                    "help":     "Centered title and subtitle over background image. Site description displays below, if present.",
                    "classes":  "body-homepage body-homepage-half"
                },
	            "basic": {
	                "id":       "basic",
	                "title":    "Centered",
	                "icon": "/mediakron/css/img/layout-icons/homepage-centered.png",
	                "help":     "Centered layout with subtitle at the top, followed by an image, if present, and then a description.",
	                "classes":  "body-homepage body-homepage-basic"
	            },
	            "right": {
	                "id":       "right",
	                "title":    "Right",
	                "icon": "/mediakron/css/img/layout-icons/homepage-right.png",
	                "help":     "Image on right, subtitle/description on left.",
	                "classes":  "body-homepage body-homepage-right"
	            },
                "left": {
                    "id":       "left",
                    "title":    "Left",
                    "icon": "/mediakron/css/img/layout-icons/homepage-left.png",
                    "help":     "Image on left, subtitle/description on right.",
                    "classes":  "body-homepage body-homepage-left"
                },
                "nointro": {
                    "id":       "nointro",
                    "title":    "No Introduction",
                    "icon": "/mediakron/css/img/layout-icons/homepage-none.png",
                    "help":     "Choose this if you plan to use only a content item as the home page (see below).",
                    "classes":  "body-homepage body-homepage-left"
                }

            }
        },
        "Appearance": {
            "logo":         "{{ $site->logo }}",
            "navigation":   "{{ navigation }}",
            "skin":         "{{ $site->skin }}",
            "font":         "{{ $site->font }}",
            "colors": {
                "navigation":   "{{ $site->navColor }}",
                "links":        "{{ $site->linkColor }}",
                "banner":       "{{ $site->bannerColor }}",
                "bannerlink":   "{{ $site->bannerLinkColor }}"
            },
            "fonts": {
              "Roboto (san serif)": "\"Roboto\", Helvetica, Arial, sans-serif", 
              "Helvetica Neue (sans serif)": "\"Helvetica Neue\", Helvetica, Arial, sans-serif",
              "Georgia (serif)":  "Georgia, serif",
              "Merriweather (serif)":  "\"Merriweather\", Georgia, serif"
              
            }
        },
        "AudioTypes": {
            "google": {
                "id":       "google",
                "name":     "Google Drive"
            },
            "mp3": {
                "id":       "mp3",
                "name":     "MP3"
            },
            "bc": {
                "id":       "bc",
                "name":     "BC Streaming Server"
            },
            "rtmp": {
                "id":       "rtmp",
                "name":     "RTMP"
            },
            "url": {
                "id":       "url",
                "name":     "URL"
            }
        },
        "VideoTypes": {
	        "youtube": {
	            "id":       "youtube",
	            "name":     "YouTube"
	        },
	        "vimeo": {
	            "id":       "vimeo",
	            "name":     "Vimeo"
	        },
	        "google": {
	            "id":       "google",
	            "name":     "Google Drive"
	        },
	        "mp4": {
	            "id":       "mp4",
	            "name":     "MP4"
	        },
	        "bc": {
	            "id":       "bc",
	            "name":     "BC Streaming Server"
	        },   
          "rtmp": {
              "id":       "rtmp",
              "name":     "RTMP"
          },
          "url": {
              "id":       "url",
              "name":     "URL"
          }
        },
        "TextTypes": {
            "html": {
                "id":       "html",
                "name":     "Basic Text"
            },
            "pdf": {
                "id":       "pdf",
                "name":     "PDF"
            },
            "image": {
                "id":       "image",
                "name":     "Manuscript Image"
            }
            
        },
        "FileTypes": {
            "pdf": {
                "id":       "pdf",
                "name":     "PDF"
            },
            "image": {
                "id":       "image",
                "name":     "Manuscript Image"
            },
            "ppt": {
                "id":       "ppt",
                "name":     "Powerpoint"
            },
            "doc": {
                "id":       "doc",
                "name":     "Office Document"
            },
            "txt": {
                "id":       "txt",
                "name":     "Text Document"
            },
            "xls": {
                "id":       "xls",
                "name":     "Spreadsheet"
            },
            
        },
        "MapTypes": {
            "osm": {
                "id":       "osm",
                "name":     "Color World Map"
            },
            "stamen-light": {
                "id":       "stamen-light",
                "name":     "Black And White"
            },
            "image-map": {
                "id":       "image-map",
                "name":     "Custom Image Map"
            }
        },
        "MimeTypes": {
            "bulk": [
                "application\/json",
                "application\/xml"
            ],
            "images": [
                "image\/jpeg",
                "image\/jpg",
                "image\/gif",
                "image\/png"
            ],
            "file": [
                "application\/pdf",
                "image\/jpeg",
                "image\/jpg",
                "image\/gif",
                "image\/png"
            ],
            "text": [
                "application\/pdf",
                "image\/jpeg",
                "image\/jpg",
                "image\/gif",
                "image\/png",
                "application\/msword",
                "application\/vnd.ms-powerpoint",
                "application\/vnd.ms-excel",
                "application\/vnd.openxmlformats-officedocument.wordprocessingml.document",
                "application\/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
                "application\/vnd.openxmlformats-officedocument.presentationml.presentation",
                 "application\/vnd.ms-outlook"
            ]
        }
    },
    "skins": {
        "default.css": {
            "title":        "Default",
			"links":        "#4b4b4b",
			"banner":       "#222",
			"bannerlink":   "#fff"
        },
        "compact.css": {
			"title":        "Compact(depricated)",
			"links":        "#4b4b4b",
			"banner":       "#030303",
			"bannerlink":   "#fff"
        }, 
        "guestbook.css": {
            "title":        "GB",
            "links":        "#252D31",
            "banner":       "#252D31",
            "bannerlink":   "#ffffff"
        }
    },
    "Templates": {
        "comparison": {
        },
        "story": {
            "default": {
                "id": "default",
                "name": "Basic Story",
                "icon": "/mediakron/css/img/layout-icons/story-simple.png",
                "help": "A basic story without an image"
            },
            "half": {
                "id":       "half",
                "name":     "Half-page background image",
                "icon":     "/mediakron/css/img/layout-icons/story-half.png",
                "help":     "An introductory page with a half-page background image.",
                "classes":  ""
            },   
            "full": {
                "id":       "full",
                "name":     "Introduction with Background Image",
                "icon":     "/mediakron/css/img/layout-icons/story-full.png",
                "help":     "An introductory page with a full background image.",
                "classes":  ""
            }   
        },
        "audio": {
            "default": {
                "id": "default",
                "name": "Audio with Background Image",
                "icon": "/mediakron/css/img/layout-icons/audio-full.png",
                "help": "The audio player will appear over a background image, if present.",
                "classes":  "slideshow audio-default"
            },
            "simple": {
                "id": "simple",
                "name": "Audio with Inline Image",
                "icon": "/mediakron/css/img/layout-icons/audio-simple.png",
                "help": "The audio player will appear above an inline image, if present.",
                "classes":  "slideshow audio-simple"
            }   
        },
        "image": {
        },
        "video": {
        },
        "slideshow": {
            "default": {
                "id": "default",
                "name":     "Grid",
                "icon":     "/mediakron/css/img/layout-icons/slideshow-grid.png",
                "help":     "A grid layout with thumbnails. If you've uploaded an image for the slideshow, it will appear as a top banner.",
                "classes":  "slideshow slideshow-grid"
            },
            "mosaic": {
                "id":       "mosaic",
                "name":     "Mosaic Layout",
                "icon":     "/mediakron/css/img/layout-icons/slideshow-mosaic.png",
                "help":     "Images in their original aspect ratios.",
                "classes":  "slideshow slideshow-mosaic"
            },       
            "full": {
                "id":       "full",
                "name":     "Centered Introduction",
                "icon":     "/mediakron/css/img/layout-icons/slideshow-full.png",
                "help":     "Full page introduction with background image if present.",
                "classes":  "slideshow slideshow-full"
            }
        },
        "narrative": {
            "default": {
                "id":       "default",
                "name":     "Introduction with Background Image",
                "icon":     "/mediakron/css/img/layout-icons/narrative-full.png",
                "help":     "An introductory page with a full background image. Widgets display below introduction.",
                "classes":  "narrative narrative-default"
            },
            "Top": {
                "id": "top",
                "name": "Image in Top Banner",
                "icon": "/mediakron/css/img/layout-icons/narrative-top.png",
                "help": "Image at the top, if present, and any widgets display below",
                "classes":  "narrative narrative-top"
            },
            "simple": {
                "id": "simple",
                "name": "Basic Narrative Layout",
                "icon": "/mediakron/css/img/layout-icons/narrative-simple.png",
                "help": "Image in the body of page, if present, and any widgets display below",
                "classes":  "narrative narrative-simple"
            }
        },
        "file": {
        },
        "folder": {
            "default": {
                "id": "default",
                "name": "List",
                "icon": "/mediakron/css/img/layout-icons/folder-list.png",
                "help": "A list of folder items. If you've uploaded an image for the folder, it will appear above the item list",
                "classes":  "folder folder-default"
            },
            "grid": {
                "id": "grid",
                "name": "Grid",
                "icon": "/mediakron/css/img/layout-icons/folder-grid.png",
                "help": "A grid layout with thumbnails. If you've uploaded an image for the folder, it will appear as a top banner."
            },
            "table": {
                "id": "table",
                "name": "Table",
                "icon": "/mediakron/css/img/layout-icons/folder-table.png",
                "help": "A table layout with item details. If you've uploaded an image for the folder, it will appear as a top banner."
            }
        },
        "options": {
            "showSidebar": {
                "id": "showSidebar",
                "name": "Sidebar is visible by default",
                "help": "If checked the sidebar will be visible by default.",
                "default": false
            }
        }
    },
    "Story":{
        "wysiwyg":{
            "image":{
                "Left": {    "class":   "alignLeft",    "icon": "alignLeft",    "help": "40% Left"               },
                "Right":{    "class":   "alignRight",   "icon": "alignRight",   "help": "40% Right"              },
                "Column":  {    "class":   "alignCol",     "icon": "alignCol",     "help": "Full Column"         },
                "Full": {    "class":   "alignFull",    "icon": "alignFull",    "help": "Full screen alignment"  }
            },
            "video":{
                "Left": {    "class":   "alignLeft",    "icon": "alignLeft",    "help": "40% Left"               },
                "Right":{    "class":   "alignRight",   "icon": "alignRight",   "help": "40% Right"              },
                "Column":  {    "class":   "alignCol",     "icon": "alignCol",     "help": "Full Column"         },
                "Full": {    "class":   "alignFull",    "icon": "alignFull",    "help": "Full screen alignment"  }
            },
            "text":{
                "left": {    "class":   "alignLeft",    "icon": "alignLeft",    "help": "40% Left"               },
                "right":{    "class":   "alignRight",   "icon": "alignRight",   "help": "40% Right"              },
                "col":  {    "class":   "alignCol",     "icon": "alignCol",     "help": "Full Column"            },
                "full": {    "class":   "alignFull",    "icon": "alignFull",    "help": "Full screen alignment"  }
            },
            "file":{
                "Left": {    "class":   "alignLeft",    "icon": "alignLeft",    "help": "40% Left"               },
                "Right":{    "class":   "alignRight",   "icon": "alignRight",   "help": "40% Right"              },
                "Column":  {  "class":   "alignCol",     "icon": "alignCol",     "help": "Full Column"         }
            },
            "map":{
                "Column":  {    "class":   "alignCol",     "icon": "alignCol",     "help": "Full Column"            },
                "Full": {    "class":   "alignFull",    "icon": "alignFull",    "help": "Full screen alignment"  }
            }
        }
    },
    "Narrative": {
        "options": {
            "hide_title": {
                "id": "hide.title",
                "name": "Hide Title"
            },
            "hide_sidebar": {
                "id": "hide.sidebar",
                "name": "Hide Sidebar"
            }
        },
        "templates": {
            "image": {
                "default": {
                    "id": "default",
                    "name": "Default Layout",
                    "icon": "",
                    "help": ""
                },
                "narrow": {
                    "id": "narrow",
                    "name": "Width of text body",
                    "icon": "",
                    "help": "Image width the same as text body"
                },               
                "full": {
                    "id": "full",
                    "name": "Full-page width",
                    "icon": "",
                    "help": ""
                }      
            },
            "video": {
                "default": {
                    "id": "default",
                    "name": "Default Layout",
                    "icon": "",
                    "help": "A single large image, description on the left."
                }            
            },
            "slideshow": {
                "default": {
                    "id": "default",
                    "name": "Default Layout",
                    "icon": "",
                    "help": "A single large image, description on the left."
                }
            },
            "audio": {
                "default": {
                    "id": "default",
                    "name": "Background Image",
                    "icon": "/mediakron/css/img/layout-icons/audio-full.png",
                    "help": "The audio player will appear over a background image, if present."
                },
                "simple": {
                    "id": "simple",
                    "name": "Inline Image",
                    "icon": "/mediakron/css/img/layout-icons/audio-simple.png",
                    "help": "The audio player will appear above an inline image, if present."
                }   
            },
            "story": {
                "default": {
                    "id": "default",
                    "name": "Default Layout",
                    "icon": "",
                    "help": "A single large image, description on the left."
                }
            },
            "file": {
                "default": {
                    "id": "default",
                    "name": "Default Layout",
                    "icon": "",
                    "help": "A single large image, description on the left."
                }
            },
            "map": {
                "default": {
                    "id": "default",
                    "name": "Default Layout",
                    "icon": "",
                    "help": "A single large image, description on the left."
                }
            },
            "timeline": {
                "default": {
                    "id": "default",
                    "name": "Default Layout",
                    "icon": "",
                    "help": "A single large image, description on the left."
                }
            },
            "comparison": {
                "default": {
                    "id": "default",
                    "name": "Default Layout",
                    "icon": "",
                    "help": "A single large image, description on the left."
                }
            },
            "progression": {
                "default": {
                    "id": "default",
                    "name": "Default Layout",
                    "icon": "",
                    "help": "A single large image, description on the left."
                }
            }
            
        }
    },
    "Contexts": {
        "slideshow": {
            "children": [
                "image",
                "video",
                "story",
                "file",
                "audio",
                "progression",
                "comparison",
                "map",
                "timeline"
            ],
            "scroll": false
        },
        "story": {
            "children": [
                "image",
                "video",
                "file",
                "audio",
                "slideshow",
                "progression",
                "comparison",
                "map",
                "physical",
                "timeline"
            ],
            "scroll": true
        },
        "narrative": {
            "children": [
                "image",
                "video",
                "story",
                "file",
                "audio",
                "slideshow",
                "progression",
                "comparison",
                "map",
                "physical",
                "timeline"
            ],
            "scroll": true
        },
        "progression": {
            "children": [
                "image"
            ],
            "scroll": false
        },
        "comparison": {
            "children": [
                "image",
                "video",
                "file",
                "audio"
            ],
            "scroll": false
        },
        "folder": {
            "children": [
                "image",
                "video",
                "story",
                "file",
                "audio",
                "narrative",
                "slideshow",
                "folder",
                "progression",
                "comparison",
                "map",
                "timeline"
            ],
            "scroll": false
        },
        "tag": {
            "children": [
                "image",
                "video",
                "story",
                "file",
                "audio",
                "narrative",
                "slideshow",
                "folder",
                "progression",
                "comparison",
                "map",
                "timeline"
            ],
            "scroll": false
        },
        "map": {
            "children": [
                "image",
                "video",
                "story",
                "file",
                "audio",
                "folder",
                "narrative",
                "slideshow",
                "progression",
                "comparison",
                "map",
                "timeline"
            ],
            "scroll": false
        },
        "timeline": {
            "children": [
                "image", 
                "video",
                "story",
                "file",
                "audio",
                "folder",
                "narrative",
                "slideshow",
                "progression",
                "comparison",
                "map",
                "timeline" 
            ],
            "scroll": false
        }
    },
    "Routes":{
        "SettingsOrganize":{
                "description":  "",
                "help":         "",
                "classes":      "settings-pane"
            },
        "SettingsContentAdd":{
                "description":  "",
                "help":         "",
                "classes":      "settings add-content"
            },
        "SettingsContentEdit":{
                "description":  "",
                "help":         "",
                "classes":      "settings edit-content"
            },
        "SettingsContentConfirm":{
                "description":  "",
                "help":         "",
                "classes":      "settings-pane"
            },
        "SettingsContent":{
                "description":  "",
                "help":         "",
                "classes":      "settings-pane"
            },
        "SettingsManageContext":{
                "description":  "",
                "help":         "",
                "classes":      "settings-manage"
            },
        "SettingsExport":{
                "description":  "",
                "help":         "",
                "classes":      "settings-pane"
            },
        "SettingsStatistics":{
                "description":  "",
                "help":         "",
                "classes":      "settings-pane"
            },
        "SettingsAppearance":{
                "description":  "",
                "help":         "",
                "classes":      "settings-pane"
            },
        "SettingsHomepage":{
                "description":  "",
                "help":         "",
                "classes":      "settings-pane"
            },
        "SettingsCanvas":{
                "description":  "",
                "help":         "",
                "classes":      "settings-pane"
            },
        "SettingsSearch":{
                "description":  "",
                "help":         "",
                "classes":      "settings-pane"
            },
        "SettingsNavigation":{
                "description":  "",
                "help":         "",
                "classes":      "settings-pane"
            },
        "SettingsImport":{
                "description":  "",
                "help":         "",
                "classes":      "import"
            },
        "SettingsGeneral":{
                "description":  "",
                "help":         "",
                "classes":      "settings-pane"
            },
        "Settings":{
                "description":  "",
                "help":         "",
                "classes":      "settings-pane"
            },
        "Help":{
                "description":  "",
                "help":         "",
                "classes":      "help"
            },
        "Login":{
                "description":  "",
                "help":         "",
                "classes":      "login login-page"
            },
        "Logout":{
                "description":  "",
                "help":         "",
                "classes":      ""
            },
        "Profile":{
                "description":  "",
                "help":         "",
                "classes":      ""
            },
        "BrowseLTI":{
                "description":  "",
                "help":         "",
                "classes":      "browse browse-lti"
            },
        "Search":{
                "description":  "",
                "help":         "",
                "classes":      "search"
            },
        "Browse":{
                "description":  "",
                "help":         "",
                "classes":      "browse"
            },
        "ItemInLTI":{
                "description":  "",
                "help":         "",
                "classes":      ""
            },
        "Primary":{
                "description":  "",
                "help":         "",
                "classes":      "item"
            },
        "Welcome":{
                "description":  "",
                "help":         "",
                "classes":      "homepage"
            }
    },
    "Data": {
        "settings": "{{ path("settings",{ 'uri': $site->uri })|raw }}",
        "search": "{{ $site->uri }}/data/search",
        "all": "{{ path("data_all",{ 'uri': $site->uri })|raw }}",
        "upload": "{{ path("upload",{ 'uri': $site->uri })|raw }}",
        "login": "{{ path("fos_user_security_check")|raw }}",
        "logout": "{{ path("fos_user_security_logout")|raw }}",
        "profile": "{{ path('fos_user_profile_show')|raw }}",
        "canvasConnect": "{{ path("canvasConnect",{'type': 'json'})|raw }}",
        "canvasDisconnect": "{{ path("canvasDisconnect",{'type': 'json'})|raw }}",
        "courses": "{{ path("data_canvas_courses", { 'uri': $site->uri })|raw }}",
        "connectCourse": "{{ path("connectSiteToCanvas", { 'uri': $site->uri })|raw }}",
        "stats": "{{ path("data_stats", { 'uri': $site->uri })|raw }}",
        "revisions": "{{ path("data_revisions", { 'site': $site->uri })|raw }}",
        "poll": "{{ path("data_poll", { 'uri': $site->uri })|raw }}",
        "addTags": "{{ path("data_add_tag", { 'uri': $site->uri })|raw }}",
        "search": {
            "query":"{{ path("search_query",{ 'uri': $site->uri })|raw }}",
            "initialize":"{{ path("search_initial", { 'uri': $site->uri, 'delete': false })|raw }}",
            "index":"{{ path("search_index",{ 'uri': $site->uri })|raw }}",
            "destroy":"{{ path("search_initial", { 'uri': $site->uri,'delete': true })|raw }}",
        },
        "collections": {
            "items": "{{ path("data_all",{ 'uri': $site->uri })|raw }}",
            "archived": "{{ path("data_archived",{ 'uri': $site->uri })|raw }}",
            "search": "{{ $site->uri }}/data/search",
            "users": "{{ path("data_user",{ 'uri': $site->uri })|raw }}"
        },
        "models": {
            "items": "{{ path("data_item",{ 'uri': $site->uri })|raw }}",
            "user": "{{ path("data_user",{ 'uri': $site->uri })|raw }}"
        }
    }
}