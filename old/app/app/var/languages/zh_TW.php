<?php

    /**
     * Need to keep this as array() vs. [] for Transilex
     */
    $messages = array(
        'language_text'                   => '繁體中文',
        'download'                        => '下載',
        'documentation'                   => '文件',
        'forum'                           => '論壇',
        'blog'                            => '部落格',
        'support'                         => '幫助',
        'donate'                          => '贊助',
        'store'                           => '商店',
        'github'                          => 'GitHub',
        'phalcon_description'             => "<strong>Phalcon</strong>是一個以C語言實現的<a href=':1:'>高性能</a>且低資源消耗的PHP應用框架",
        'the_fastest_php_framework'       => '速度最快的<br />PHP框架',
        'try_online'                      => '線上試用',
        'see_screencasts'                 => '觀看展示影片',
        'everything_you_need_upper'       => '您需要的一切',
        'full_mvc_applications'           => "完整的<a href=':1:'>MVC</a>應用程式",
        'single_module'                   => '單一模組',
        'multi_module'                    => '多模組',
        'micro_applications'              => '微型應用',
        'orm'                             => 'ORM',
        'transactions'                    => '交易',
        'behaviors'                       => '行為',
        'relations'                       => '關聯',
        'phql'                            => 'PHQL',
        'events'                          => '事件',
        'validations'                     => '驗證',
        'hydration'                       => 'Hydration',
        'logging'                         => '日誌',
        'profiling'                       => '分析',
        'sharding'                        => 'Sharding',
        'odm_for_mongo'                   => 'ODM for Mongo',
        'template_engine_volt'            => '樣板引擎 (Volt)',
        'di_ioc'                          => 'DI/IOC',
        'events_management'               => '事件管理',
        'encryption'                      => '加密',
        'http_request'                    => 'HTTP請求',
        'http_response'                   => '回應',
        'http_cookies'                    => 'Cookies',
        'escaping'                        => '跳脫',
        'filtering'                       => 'Filtering',
        'forms_builder'                   => '表單建立器',
        'forms_validation'                => '驗證',
        'flash_messages'                  => '快閃訊息',
        'cache'                           => '快取',
        'pagination'                      => '分頁',
        'annotations'                     => '註解',
        'security'                        => '安全',
        'translations'                    => '多語言化',
        'assets_management'               => '資源管理',
        'universal_auto_loader'           => '自動載入',
        'cli'                             => 'CLI',
        'phalcon_forum_upper'             => 'PHALCON 論壇',
        'stack_overflow_upper'            => 'STACK OVERFLOW',
        'github_upper'                    => 'GITHUB',
        'email_us_upper'                  => '寄信給我們',
        'services_upper'                  => '服務',
        'consulting_upper'                => '諮詢',
        'requirements_analysis'           => '需求分析',
        'implementation'                  => '實作',
        'ongoing_support'                 => '持續支持',
        'read_more'                       => '閱讀更多',
        'hosting_upper'                   => '主機與伺服器',
        'phalcon_can_be_installed'        => 'Phalcon可以安裝在',
        'main_upper'                      => '主要',
        'consulting'                      => '諮詢',
        'hosting'                         => '主機與伺服器',
        'support_upper'                   => '幫助',
        'forum_community'                 => '論壇 / 社群',
        'stack_overflow'                  => 'Stack Overflow',
        'issue_tracker'                   => '問題追蹤',
        'get_involved_upper'              => '參與',
        'team'                            => '團隊',
        'about'                           => '關於',
        'roadmap'                         => '歷程',
        'donate_to_phalcon'               => '捐款給Phalcon',
        'or'                              => '或',
        'twitter'                         => 'Twitter',
        'facebook'                        => 'Facebook',
        'google_plus'                     => 'Google Plus',
        'vimeo'                           => 'Vimeo',
        'amazing_contributors'            => '我們了不起的貢獻者',

        'download_phalcon'                => '下載Phalcon',
        'download_linux'                  => 'Linux/Unix/Mac',
        'download_windows'                => 'Windows DLLs',
        'download_developer_tools'        => '開發者工具',
        'download_ide_stubs'              => 'IDE 整合',
        'download_ubuntu'                 => '安裝Phalcon至Ubuntu你需要以下步驟：',
        'download_ubuntu_or_debian'       => 'Ubuntu or Debian',
        'download_ubuntu_1'               => '如果你缺少apt-add-repository則使用以下指令：',
        'download_note'                   => 'Phalcon是一個以C語言撰寫的PHP擴充，因此需要下載符合你平台的二進制檔案或從原始碼編譯。',
        'download_compilation'            => '編譯',
        'download_compilation_1'          => '在Linux你可以很簡單地編譯原始碼並安裝擴充。',
        'download_requirements'           => '需求',
        'download_requirements_1'         => '我們需要一些套件來進行安裝：',
        'download_requirements_2'         => 'PHP 5.x 開發資源',
        'download_requirements_3'         => 'GCC編譯器',
        'download_compilation_11'         => '1. 以C原始檔建立一個擴充功能需要以下步驟：',
        'download_compilation_12'         => '2. 把擴充加入到你的php.ini：',
        'download_compilation_13'         => '3. 完成！重新啟動伺服器',
        'download_arch'                   => 'Arch Linux',
        'download_arch_1'                 => "有個ArchLinux專用的PKGBUILD，在<a href=':1:'>這裡</a>",
        'download_opensuse'               => 'OpenSUSE',
        'download_opensuse_1'             => "有個現成的擴充包在<a href=':1:'>這裡</a> (感謝 <a href=':2:'>Mariusz Łączak</a>)",
        'download_freebsd'                => 'FreeBSD',
        'download_freebsd_1'              => '在FreeBSD你只需要以下命令即可安裝',
        'download_dependencies'           => '依賴',
        'download_dependencies_1'         => '雖然運作Phalcon並沒有依賴任何其他PHP擴充元件，但是需要一些擴充來使用所有功能。使用到的擴充有以下：',
        'download_dependencies_2'         => '並不是以上所有擴充元件都是必須的。你可以只安裝你會使用到的。例如你使用MySQL資料庫，那麼你只要安裝PDO跟PDO/MySQL，其他像是Oracle、SQlite、Postgresql或Mongo都不需要。',
        'download_need_help'              => '需要幫助嗎？',
        'download_need_help_1'            => "參考一下我們的<a href=':1:'>幫助頁面</a>來取得幫助。我們會盡全力提供支援。",

        'download_windows_note'           => '我們強烈建議您使用最新版的PHP來對應我們的DLL檔，來取得完整的Phalcon功能。',
        'download_windows_stable'         => '穩定/主要版本',
        'download_windows_installation'   => '安裝',
        'download_windows_installation_1' => "要在Windows上使用Phalcon你可以下載DLL檔，並編輯您的php.ini檔案，加入到最後一行，並重新啟動你的網站伺服器。<a href=':1:'>閱讀更多</a>。",
        'download_windows_guides'         => '相關指南',
        'download_windows_guides_xampp'   => '安裝在XAMPP上',
        'download_windows_guides_wamp'    => '安裝在WAMP上',
        'download_windows_alpha'          => 'Alpha/Beta 版本',
        'download_source_code'            => "原始檔： <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_source_code_switch'     => "原始檔 (請切換至相關的branch)：<a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_no_alpha_beta'          => '目前沒有可用的alpha/beta版本。',
        'download_windows_older'          => '較舊的版本',

        'download_devtools_1'             => '這些工具是一些非常有用的腳本，可用來快速產生整體架講的程式碼。您的應用程式所需要的核心元件只需要一個簡單的命令就能直接生成，讓您可以簡單並快速地使用Phalconl來開發應用程式。',
        'download_devtools_docs'          => "參考文件：<a href=':1:'>Phalcon開發者工具</a>",
        'download_devtools_composer'      => '使用Composer安裝',
        'download_devtools_composer_1'    => '安裝Composer到一個通用的位置或到你的專案裡：',
        'download_devtools_composer_2'    => '建立一個composer.json檔案並包含以下內容：',
        'download_devtools_composer_3'    => '執行composer安裝器：',
        'download_devtools_composer_4'    => '建立一個symbolic link給phalcon.php腳本：',
        'download_devtools_download'      => '您可以在<a href=":1:">Github</a>下載或clone一個跨平台並包含開發者工具的package。',

        'download_vagrant'                => 'Vagrant',
        'download_vagrant_boxes'          => 'Vagrant Boxes',
        'download_vagrant_1'              => "<a href=':1:'>Vagrant</a>是一個優秀的工具讓你可以建立並設定輕量、可重複使用且可攜式的開發環境。",
        'download_vagrant_2'              => "使用以下任何一個預先設置好的Phalcon Vagrant Boxes來測試並開發。",
        'download_box_1'                  => "Box #1",
        'download_box_2'                  => "Box #2",
        'download_box_user_pass'          => "MySQL使用者: :1: 密碼: :2:",
        'download_box_doc_root'           => "文件目錄: :1:",
        'download_examples'               => "預先安裝好的範例",
        'download_examples_1'             => "以下的範例都已經預先安裝在所有Vagrant Box內：",

        'consulting_header'               => "We have partnered with <a href=':1:'>LEZGRO</a>, a company that specializes in web and mobile application development and is very adept in delivering Phalcon powered applications to their clientele.",
        'consulting_lezgro_1'             => "<a href=':1:'>LEZGRO</a> congratulates you with the your choice of making Phalcon central in your technology stack!",
        'consulting_lezgro_2'             => "Since our company first saw the light of the day in 2003, we have tried various technologies and approaches in software development.",
        'consulting_lezgro_3'             => "Product managers, CTOs, and non-technical founders involve <a href=':1:'>LEZGRO</a> to build products that stand out, quickly and with a high quality.",
        'consulting_lezgro_4'             => "Now that we have acquired positive experience with Phalcon, we are open to advise you on making the decision to develop on Phalcon, and help you bring your Phalcon-based product to market.",
        'consulting_lezgro_5'             => "Contact LEZGRO through their <a href=':1:'>website</a>, where you can also see samples and testimonials of their work.",

        'consulting_mctekk_header'        => 'MCTekK has already delivered various high end Phalcon projects, with their main strengths being web and mobile development.',
        'consulting_mctekk_1'             => 'MCTekK jumped on the Phalcon wagon since day one. From its conception we saw the great advantages that Phalcon was offering and could offer in the future.',
        'consulting_mctekk_2'             => 'We have ample experience with Phalcon and have developed a myriad of project with it as the core. We are here to advise you on anything you need concerning Phalcon to help you improve your readiness, quickness and quality.',
        'consulting_mctekk_3'             => 'Contact us thourgh our <a href=":1:">website</a>, where you can take a look at the projects we have been involved in.',

        'requirements_analysis_1'         => '開發人員所面臨的最大問題是很多項目都沒有進行充分的需求分析。因此常常客戶的要求完全不同於開發人員的理解和開發結果。',
        'requirements_analysis_2'         => '我們可以提供需求分析的服務，與客戶討論並將他們真正的需求轉達給開發者。',
        'implementation_1'                => '如果您想要僱用我們來開發您的應用程式，我們會很開心可以提供幫助。使用最新的技術，我們提供健壯的解決方案給您的工作或專案，完成測試及文件。',
        'ongoing_support_1'               => '對於我們的服務感興趣的客戶，我們可以為他們的項目提供持續支持。客戶可以按小時購買技術支持(至少2小時)，每小時50美元。',
        'ongoing_support_2'               => '支援服務永遠不會過期並且可以在任何需要的時候使用。對於想使用我們持續支援服務的客人，我們提供彈性的方案來最佳地滿足需求。',
        'sponsors'                        => '贊助者',
        'sponsors_1'                      => '對於那些希望贊助我們工作及進一步的Phalcon開發的人，我們提供各種不同的贊助選項來滿足任何的預算。',
        'sponsors_2'                      => '此外，客人可能希望時實現某些特定的功能，通常這會根據他們的知名度和複雜度而需要較長的時間。我們可以用正常的費率來容納這些要求。',
        'contact'                         => '聯絡',
        'contact_1'                       => "請不需拘束地<a href=':1:'>聯絡我們</a>來討論您的需求，並讓我們提供符合您需求的解決方案。專案永遠不嫌太大或太小。",

        'phalcon_team'                    => 'Phalcon團隊',
        'team_andres_1'                   => 'Andres不是開源領域中的陌生人。在過去的九年裡，他就已經設計並發佈過PHP框架，並參與網站開發 － 他主要的熱情所在。',
        'team_andres_2'                   => "作為一個TR35的勝利者，Andres的主要動力是總是選擇及使用正確的工具來完成工作，大部分都專注於效能。因此在2011年，一個新的主意出現在他的工作中：創建一個新型的框架給PHP的開發人員，其中之一是專注於可用性、多樣功能及大部分於效能。",
        'team_andres_3'                   => '因為這種全新的想法，Phalcon誕生了。一個用C語言實現的PHP框架，除了為開發人員提供豐富、完整的功能，還保持極高的性能和低資源消耗。',
        'team_andres_4'                   => 'Andres是Phalcon的靈感提供者及主要的核心開發人員之一。',
        'team_nikos_1'                    => 'Nikos已經在IT界超過了20年。他在2000年時被帶到了PHP的世界裡，並開始使用在他的個人專案及僱主的專案裡。',
        'team_nikos_2'                    => '他喜歡發掘最新的技術以及想辦法整合它們至現有的應用程式裡，以取得它們所提供的好處。',
        'team_nikos_3'                    => '他是一個測試驅動開發(TDD)的狂熱支持者，並總是嘗試完全覆蓋至他的程式碼裡。',
        'team_nikos_4'                    => "Nikos持續關注最新和打破常規的創新技術。他加入核心團隊後主要的工作是NFRs的協調和bug的修復，幫助測試、文件以及孵化器。同時Nikos負責維護這個專案的Windows DLL和盡可能地提供支援。",
        'team_nikolay_1'                  => 'Nikolay已經開發網站應用程式超過10年。他參與過高性能需求及複雜的網站和設計。',
        'team_nikolay_2'                  => 'Nikolay已經為開源專案付出了很長的一段時間，並在有需要時盡可能地使用開源專案。因此他開始利用個人的時間透過fork專案來參與社群，並提供建設性的改變和建議來回饋社群，例如改進效能。他一直在改善有許多正向回饋的開源CMS專案。',
        'team_nikolay_3'                  => '他持續地參與並回饋開源專案的心態讓他精進了技術與知識。',
        'team_nikolay_4'                  => 'Nikolay是一個最佳化網站應用程式效能的狂熱支持者。在他接觸Phalcon後，他決定持續追求及使用這個專案，並成為它的傳播者。他正在努力為俄語社群提供資源給那些說俄語的開發者們。',
        'team_nikolay_5'                  => "他的貢獻包括：一個俄語的鏡像網站(<a href=':1:'>http://www.Phalcon.ru</a>)、一個俄語文件的鏡像(<a href=':2:'>http://docs.Phalcon.ru</a>)、持續改變及修正英文文件還有一個社交網路Vkontakte的群組(<a href=':3:'>http://vk.com/Phalcon</a>)。",

        'get_involved'                    => '參與',
        'about_description_1'             => "一個驚人的專案需要一些驚人的幫助。我們可能還不認識您，但我們認為您是能夠創建一個更好網路世界的人。讓我們一起，改變這個世界！在Phalcon，我們已經創造了下一個世代的PHP框架；我們想給您一個驚人的效能，給您一個更輕鬆地、更愉悅地開發方式。",
        'about_description_2'             => "我們希望您享受Phalcon，就像我們一樣。我們隨時歡迎您的合作與幫助！<strong>你不需要是一個C語言開發者才能幫助Phalcon！</strong>您有許多其他方法可以參與貢獻：",
        'about_translations_1'            => "我們正在盡可能地讓更多的開發者能打破語言的障礙。我們目前使用<a href=':1:'>:2:</a>來處理所有這個網站需要翻譯的字詞和句子。這個專案的repository在<a href=':3:'>這裡</a>，而在下方您可以看看目前翻譯的狀況。",
        'documentation_upper'             => '文件',
        'about_documentation_1'           => "這個網站的repository可以在 <a href=':1:'>github</a>上找到。我們使用<a href=':2:'>readthedocs</a>來管理我們的文件。<br /><br />我們隨時歡迎並感謝任何對我們文件的修正和改進，您只需要clone一份這個repository，然後發送一個pull request給我們就行！<br /><br />如果您可以翻譯一些內容到其他語言，來幫助非英語系的開發人員，這將會非常棒！",
        'screencasts'                     => '演示影片',
        'about_screencasts_1'             => "我們大家都在影片演示。如果您有一些多餘的時間並且想要以教學影片來幫助這個社群，我們非常歡迎。看看我們的<a href=':1:'>Vimeo 頻道</a>來開始。",
        'tests'                           => '測試',
        'about_tests_1'                   => "沒有任何一個軟體是完全沒有漏洞的。如果您找到任何漏洞，請不要猶豫地告訴我們。我們的測試套件有超過<a href=':1:'>8000</a>個測試。但是，單元測試永遠是不夠的。透過增加更多的測試來幫助改進我們的測試套件。所有增加的測試都能讓這個框架更加穩定。",
        'sample_applications'             => '範例應用程式',
        'about_sample_apps_1'             => '大型的範例有助於更加地了解Phalcon到底能創造多大型的應用程式。請感到自在地分享您的repository到範例應用程式裡來幫助其他人了解他們的工作並讓他們也能給予您回饋意見！',
        'evangelism'                      => '傳道者',
        'about_evangelism_1'              => "有許多人還不知道Phalcon的存在或它的能耐。我們能肯定有許多開發人員在認識Phalcon後可以取得許多好處。如果您知道任何PHP的活動或聚會，並且有意願分享這個專案，您將可以得到我們完整的支援。有誰會不想知道能夠革命性地徹底改變PHP開發的工具呢？",
        'share_your_experiences'          => '分享您的經驗',
        'about_share_experiences_1'       => "不必害羞，請感到自在地向社群分享Phalcon對您是多麼好用。如果Phalcon對您是一個成功的案例，也請讓我們一起來分享到社群。另外，也可以討論哪些組件需要改進，哪些地方您可以更輕鬆地達成，使用Phalcon可以得到哪些好處等等。雖然不是所有事情都能立即實現，但您提出的新功能請求可以幫助我們在未來改進這個專案。您的意見回饋將幫助我們所有人。",
        'about_blog_1'                    => "如果您喜歡撰寫文章，請記住<a href=':1:'>我們的部落格</a>是開放給您撰寫教學的。如果您有自己的部落格，並且已經寫了一些關於Phalcon的事情，我們也可以將他發佈到我們的社交網路頁面上來達到更大的瀏覽量。如果您的部落格文章不是英文，我們會盡可能分享甚至翻譯它。若您知道有哪些部落格是關於PHP，並且可能對這個專案會有興趣的請讓我們知道。",
        'donations_sponsoring'            => '捐款 / 贊助',
        'about_sponsoring_1'              => "我們是一個很小型但是擁有非常高效率的核心開發團隊，我們盡可能地花費最多的時間在這個專案上。我們對這個專案所有的激情，讓它每天都變得更好。 Phalcon是一個開放原始碼的軟體，需要自願者不停地努力來讓它不斷改進。您可以通過捐款或贊助來幫助我們更積極地開發這個專案。更多的時間和資源都意味著讓這個專案更加活躍、更多改進、更好的支持和更多驚人的功能等等。",
        'social_networks'                 => '社交網路',
        'about_social_networks_1'         => "Phalcon每天都在不斷地改進，透過我們的意願來讓它變得更好。現在社交網路是我們生活的一部分，我們透過它來和其他人互動。分享您使用Phalcon的經驗到您的社交圈內將大大提高Phalcon的知名度，讓越來越多的人加入我們的社區，進而讓它更強大，更豐富、更受歡迎。例如「+1」，來分享我們在每個社交網路上的發文，並參與這些發文的討論。我們非常感謝您，對於那些通過您的分享而發現Phalcon的人們！",
        'about_social_networks_2'         => "我們存在於大部分知名的社交網路上。透過追蹤我們，您能幫助我們讓更多人看到我們的專案。",
        'follow_on_twitter'               => '在Twitter上追蹤我們',
        'facebook_page'                   => 'Facebook專頁',
        'google_plus_page'                => 'Google+專頁',
        'official_blog'                   => '官方部落格',
        'star_on_github'                  => '在GitHub上標記Star',
        'thank_you'                       => '謝謝您！',
        'about_thank_you_1'               => '我們非常感謝所有貢獻者和社群成員給予我們動力來創造Phalcon這個最優秀的框架。您的讚美和熱情是讓我們做到最好的動力來源。我們希望做到並超越您對於Phalcon的信任。',
        'flying_with_phalcon'             => '謝謝您願意與Phalcon一同翱翔！&lt;3',

        'hosting_description'             => 'Phalcon可以安裝在任何提供SSH root權限(或sudo)的機器或伺服器提供者。以下是一個提供以上需求的清單：',
        'hosting_fortrabbit_title'        => 'Fortrabbit',
        'hosting_fortrabbit_1'            => 'Fortrabbit提供了許多主機方案 (有一個是給開發人員使用並且免費的 - 除了一些小限制) 來滿足大部分想使用Phalcon來開發並部署應用程式的開發人員。',
        'hosting_fortrabbit_2'            => "他們提供各種不同的<a href=':1:'>擴充元件</a>來滿足大多數有需求的專案。",
        'hosting_fortrabbit_3'            => '穩定版本的Phalcon已經預先安裝好了，你只需要在管理面板中啟動即可。',
        'hosting_webfaction_title'        => 'WebFaction',
        'hosting_webfaction_1'            => 'WebFaction專門為開發人員所打造的虛擬主機。完整的shell訪問再加上已經預先安裝所有您喜愛的工具，並為您維護。',
        'hosting_webfaction_2'            => "安裝Phalcon到WebFaction上，跟著這份說明來開始 <a href=':1:'>在這裡</a>",
        'hosting_amazon_ec2_title'        => 'Amazon EC2',
        'hosting_amazon_ec2_1'            => 'Amazon Elastic Compute Cloud提供一個可延伸擴充，並且只按需求付費的雲端運算環境。',
        'hosting_amazon_ec2_2'            => "選擇一個預先配置好的Amazon Machine Image (AMI) 來立即啟動並運行。或是自行建立一個AMI來存放你的應用程式、程式庫、資料和相關設定。<a href=':1:'>了解更多</a>",
        'hosting_linode_title'            => "Linode",
        'hosting_linode_1'                => "部署並管理Linux虛擬伺服器到Linode雲端上。在數秒內取得並開始運行您想要的Linux版本，以及伺服器位置。<a href=':1:'>了解更多</a>",
        'hosting_digital_ocean_title'     => 'Digital Ocean',
        'hosting_digital_ocean_1'         => "速度極快的雲端技術。專門為開發人員所設計。部署到SSD雲端伺服器上只需55秒。<a href=':1:'>了解更多</a>",
        'hosting_digital_ocean_2'         => "<p>跟著這個<a href=':1:'>教學</a>來快速上手</p>",
        'hosting_rackspace_title'         => "Rackspace",
        'hosting_rackspace_1'             => "雲端伺服器是在Rackspace雲端上運行Linux或Windows&reg;的虛擬機器。您可以根據需求來調整像是CPU、記憶體或儲存空間等資源。最棒的是，您只要為有使用到的部分付費。<a href=':1:'>了解更多</a>",
        'hosting_install_instructions'    => '使用標準的安裝步驟來安裝Phalcon即可。',
        'hosting_azure_title'             => "Windows Azure",
        'hosting_azure_1'                 => "<a href=':1:'>Windows Azure Cloud</a>提供你一個高延展性及管理性的Windows主機來存放你的應用程式。使用Phalcon來減少你的支出。",
        'hosting_azure_2'                 => "要安裝Phalcon，可以一步一步跟著<a href=':1:'>這個SitePoint文章</a>來開始。",
        'hosting_aspnix_1'                => 'ASPnix提供卓越的Windows網站伺服器服務。我們的客人們將我們的服務票選為出色。我們提供經濟實惠Windows共享主機、VPS及實體專屬主機方案！ <a href=":1:">了解更多</a>',
        'hosting_aspnix_2'                => '<p>Phalcon在所有Windows共享主機方案裡都支援，不需要任何的設定或安裝！他們提供了不同的PHP版本，從5.2－5.6，而且還有許多<a href=":1:" target="_blank">額外的擴充元件</a>!</p>',
        'hosting_layershift_title'        => 'Layershift',
        'hosting_layershift_1'            => "您只要準備好您的程式碼，伺服器我們通通幫您搞定。可自動擴充、下一個世代的PHP PaaS",
        'hosting_layershift_2'            => "<p>跟著這個<a href=':1:'>教學</a>來快速上手</p>",

        'testimonials'                    => '感言與推薦',
        'testimonials_description'        => "以下是一些感言、推薦以及成功的故事，來自於您，以及所有使用Phalcon PHP的開發人員與使用者。我們隨時歡迎用email來分享成功的故事，並會發佈到我們的部落格上。如果您希望分享您使用Phalcon的故事給我們，請寄email給我們： <a href='mailto::1:'>:2:</a>",
        'testimonials_1'                  => "你們好，Phalcon團隊！我有一個使用Phalcon框架的專案。叫作Guitarama (<a href=':1:'>:2:</a>)－吉他譜以及和弦目錄。這個網站主要是給俄羅斯用戶，使用俄羅斯語，但是我希望所有人都能沒有問題地了解大部分的頁面。這個網站於2013年一月重新發佈在新的平台並且穩定地成長中。目前每天有 ~1500個獨立訪客，~5000頁面瀏覽量。運作在一個老舊的1хP4-3Ghz, 4GB RAM實體伺服器。再次感謝你們創造了這個偉大的框架，以及你們付出的一切 :) Michael",
        'testimonials_2'                  => "哈囉，Phalcon團隊。我很好興能分享給你們我們使用Phalcon在<a href=':1:'>:2:</a> 和 <a href=':3:'>:4:</a>專案的成功故事，哈薩克最多訪問量和高負載的網站，被排名CIS在TOP-10分類網站。兩個網站都使用一個由Phalcon\Mvc\Micro所撰寫的單一RESTful API。在API的尖端負載量時，像是每秒400個請求完全不成問題。轉換到Phalcon讓我們減少回應生成的時間，且降低CPU和RAM的消耗，同時還減少開發時間。我們會持續使用Phalcon在我們的新專案裡。謝謝你們付出的一切！在此誠摯地問候， Nikita Vershinin, Kolesa.kz 和 krisha.kz的領導開發者",
        'testimonials_3'                  => "Phalcon團隊，你們創造的這個框架真是太驚人了。我從來沒有用過任何一個框架同時擁有速度，效率，簡潔以及自然性。我打算盡我所能以任何方式來宣傳和貢獻這個專案。最近我正在開發一個~800小時的專案，很高興地告訴你們，我們使用Phalcon。 Bravo. Brian Seymour",
        'testimonials_4'                  => "嗨，我偶然發現並試了Phalcon後覺得它真是太棒了！我只是想要告訴你們，你們到底有多棒！總之，謝謝這個框架及持續這個優秀的作品！Ivan Penchev",
        'testimonials_5'                  => "大家好，我用Phalcon寫了一個簡單的縮網址服務。這個框架非常驚人！真的。 <a href=':1:'>:2:</a>。演示在這裡<a href=':3:'>:4:</a> :) Murat Küçükosman",
        'testimonials_6'                  => "哈囉，Phalcon團隊，我用你們的框架建立了一個小型專案給波蘭的使用者。我必須承認效能十分驚人，真是做得太棒了。這是一個用來驗證網頁內容的服務，為波蘭語 <a href=':1:'></a>:2:</a>",
        'testimonials_7'                  => "大家好！我只是想和你們分享一下我們最新釋出的一個舊專案：<a href=':1:'>:2:</a>。非常棒地能轉換使用Phalcon，和前一個框架相比，我們擁有更優秀的效能！",

        'support_note'                    => "許多人提出bug但只是因為他們並未使用最新版本。請先造訪 :1: 下載最新版本 (或自行編譯) 再確認問題是否真的是一個bug。",
        'support_download_page'           => "下載頁面",
        'support_documentation_1'         => "請先嘗試 :1: 。您也可以在我們的文件內使用搜尋功能來找出您在找的東西。如果您的問題仍無法解決，再嘗試以下選項。",
        'support_phalcon_forum'           => "Phalcon論壇",
        'support_forum_1'                 => "您可以在我們的<a href=':1:'>討論區</a>詢問問題。",
        'support_irc'                     => "IRC頻道",
        'support_irc_1'                   => "你可以在 :1: Freenode頻道找到我們。",
        'support_stack_overflow_1'        => "如果您比較熟悉或偏好Stack Overflow，這是 <a href=':1:'>phalcon</a> tag頁面，你可以用來搜尋或標記在您的問題裡。",
        'support_please_note'             => "請注意：",
        'support_please_note_1'           => "Stack Overflow並不是Phalcon專屬的討論區",
        'support_please_note_2'           => "請不要在那裡提出bug。請使用Github裡的<a href=':1:'>issue tracker</a>",
        'support_please_note_3'           => "請不要在那裡提出功能要求。請使用Github裡的<a href=':1:'>issue tracker</a>",
        'support_please_note_4'           => "請確定你標記了'phalcon'這個標籤到你的問題裡",
        'support_please_note_5'           => "請確定你有提到'Phalcon'在你的問題裡",
        'support_reporting_a_bug'         => "回報bug",
        'support_reporting_a_bug_1'       => "請回報bug當您已經用盡了以上所有選項 ，使用Github上的<a href=':1:'>issue tracker</a>。",


    );

    // return $messages;
