<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <?php include_once __PATH_COMPONENT__ . "/MetaTag.php" ?>

</head>

<body class="bg-[#0e1218] min-h-screen">
    <!-- end head -->
    <!-- header -->
    <header class="px-3 container border-b border-gray-600 py-1 text-white bg-[#0e1218] fixed top-0">
        <div class="flex-between">
            <div class="">
                <a href="/" class="text-2xl ">DINHDEV</a>
            </div>
            <div class="">
                <div class="w-full bg-[#1d1f26] rounded-xl lg:max-w-[29.5rem] ">
                    <form class="relative w-full">
                        <div
                            class="relative h-12 items-center rounded-12 !bg-background-subtle !px-3  backdrop-blur-[3.75rem] mx-2  flex overflow-hidden bg-surface-float border border-transparent cursor-text">
                            <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="w-8 h-8 pointer-events-none mr-3 text-text-tertiary">
                                <path
                                    d="M10 3.347c1.138 0 2.213.266 3.163.739-.255.462-.74.764-1.283.787l-.87.036A5.636 5.636 0 0010 4.818c-3.038 0-5.5 2.415-5.5 5.394 0 2.906 2.344 5.276 5.279 5.39l.221.004.221-.004c2.935-.114 5.279-2.484 5.279-5.39l-.003-.13.082-.215c.2-.524.676-.893 1.234-.967l.058-.005a6.771 6.771 0 01-.803 4.742 2.849 2.849 0 012.076.657l.157.143 1.872 1.836a2.731 2.731 0 010 3.916 2.864 2.864 0 01-3.852.13l-.14-.13-1.872-1.836a2.732 2.732 0 01-.818-2.19 7.062 7.062 0 01-3.491.914c-3.866 0-7-3.073-7-6.865 0-3.791 3.134-6.865 7-6.865zm5.37 12.13a1.28 1.28 0 00-.097 1.73l.096.106 1.872 1.836c.241.236.552.362.868.378h.135l.135-.013c.269-.04.527-.162.733-.365a1.28 1.28 0 00.097-1.73l-.097-.106-1.871-1.835a1.342 1.342 0 00-1.872 0zm.05-12.056l.044 1.013a2.493 2.493 0 001.648 2.225l.97.355c.457.167.35.83-.138.85l-1.033.044a2.592 2.592 0 00-.304.03l-.05.01c-.08.014-.159.032-.236.054l-.147.046-.18.07-.168.08-.113.063-.141.09-.164.121-.032.026c-.323.27-.579.62-.734 1.026l-.361.95a.43.43 0 01-.373.285h-.078l-.077-.012a.429.429 0 01-.34-.407l-.044-1.014a2.493 2.493 0 00-1.648-2.224l-.97-.355c-.457-.167-.35-.83.138-.85l1.034-.044c.3-.013.588-.077.855-.185l.109-.048c.175-.08.34-.178.49-.294l.148-.122.12-.114.136-.152.045-.056.078-.104.055-.082-.03.046a2.47 2.47 0 00.262-.505l.362-.95c.17-.45.846-.345.867.134z"
                                    fill="currentcolor" fill-rule="evenodd"></path>
                            </svg><input data-search-panel-item="true" placeholder="Search" type="primary"
                                autocomplete="off"
                                class="h-full flex-1 !placeholder-text-tertiary text-text-tertiary hover:text-text-primary min-w-0  bg-transparent typo-body caret-text-link focus:outline-none"
                                value="">
                            <div class="flex h-full items-center bg-background-subtle"></div>
                            <div class="z-1 hidden items-center gap-3 lg:flex">
                                <div class="flex"><kbd class="px-2  rounded-lg flex-center border">Ctrl</kbd><span
                                        class="mx-1 py-0.5 ">+</span><kbd
                                        class="flex min-w-5 justify-center rounded-8 border border-border-subtlest-tertiary bg-background-subtle px-2 py-0.5 font-sans rounded-lg ">K</kbd>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="">
                <div class="flex items-center gap-3">
                    <div>
                        <a href="#" class="px-3 py-2 bg-white rounded-lg text-[#1d1f26] font-bold uppercase">New
                            post</a>
                    </div>
                    <div>
                        <a href="#" class="block group h-9 w-12 flex-center rounded-lg bg-[#1b1f26]">
                            <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                class="w-7 h-7 text-gray-500 transition-all group-hover:text-white  pointer-events-none">
                                <path
                                    d="M12 3a2.312 2.312 0 012.25 2.847 6.39 6.39 0 014.106 5.491l.015.264.004.21v2.226l.072.022c.803.28 1.405.988 1.53 1.852l.018.175.005.158c0 1.224-.95 2.226-2.154 2.307l-.159.006-2.046-.001-.013.033a3.94 3.94 0 01-3.216 2.384l-.21.016-.202.005a3.926 3.926 0 01-3.536-2.22l-.083-.183-.015-.035H6.313c-1.171 0-2.139-.87-2.292-1.998l-.016-.156L4 16.245c0-.903.52-1.693 1.325-2.076l.165-.071.135-.048v-2.238A6.377 6.377 0 019.75 5.846 2.312 2.312 0 0112 3zm0 3.938c-.437 0-.86.057-1.262.165l-.148.042a4.876 4.876 0 00-3.46 4.441l-.005.226v2.808c0 .414-.31.756-.71.806l-.197.012a.813.813 0 00-.007 1.613l.101.007h3.25l.005.143a2.438 2.438 0 002.272 2.289l.161.005.16-.005a2.438 2.438 0 002.272-2.265l.005-.168h3.25l.102-.006a.813.813 0 000-1.612l-.196-.012a.813.813 0 01-.712-.704l-.006-.103v-2.807l-.003-.183a4.878 4.878 0 00-3.461-4.485l-.143-.041A4.881 4.881 0 0012 6.937zM12 4.5a.812.812 0 10.788 1.013l.018-.099.007-.101A.812.812 0 0012 4.5z"
                                    fill="currentcolor" fill-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex items-center gap-3 bg-[#1b1f26] h-9 px-3 py-1 rounded-lg">
                        <button class="flex items-center px-2">
                            <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                class="w-7 h-7 pointer-events-none text-base -ml-2 mr-1">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12zm1.09-18.665l-.603-.77a.698.698 0 00-1.14.031c-1.12 1.635-.986 3.612-.206 5.09l.332.634.275.54.22.444.115.244.09.202.074.199c.192.6.134 1.221-.163 1.747-.449.78-1.178.963-1.864.845-1.123-.193-1.463-1.473-1.566-2.947l-.022-.388-.013-.394-.009-.593-.001-.585-.004-.136c-.037-.686-.377-.694-1.017-.025-1.796 1.875-2.099 4.749-.753 7.175 1.01 1.85 3.058 3.067 5.152 3.067.088 0 .178-.003.27-.007 2.166-.11 4.255-1.544 5.183-3.56a5.99 5.99 0 00.468-3.566c-.283-1.556-1.096-2.587-2.18-3.96a112.52 112.52 0 01-.392-.499l-.526-.663-.839-1.032-.88-1.093z"
                                    fill="#FC538D"></path>
                            </svg>
                            20
                        </button>
                        <button class="flex items-center gap-2">
                            <span class="flex items-center">
                                <svg width="1em" height="1em" viewBox="0 0 16 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 pointer-events-none text-[#7147ed] ">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8 13.605A5.333 5.333 0 108 2.938a5.333 5.333 0 000 10.667zm1.213-8.672a.494.494 0 00-.812-.517L4.944 7.922a.494.494 0 00.35.843H7.82l-1.034 2.844a.494.494 0 00.812.518l3.456-3.507a.494.494 0 00-.348-.842H8.179l1.034-2.845z"
                                        fill="currentcolor"></path>
                                </svg>
                                10
                            </span>
                            <img class="object-cover w-8 h-8 rounded-lg" loading="lazy" type="avatar"
                                alt="vuvandinh's profile" src="https://avatars.githubusercontent.com/u/109643771?v=4">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- sidebar -->
    <?php require_once __PATH_COMPONENT__ . '/Sidebar.php' ?>