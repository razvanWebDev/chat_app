<?php 
$header_title = "Chat";
include "php/header.php";
if(!isset($_SESSION["m_username"])){
    header("Location: login.php");
    exit();
}
?>
    <div id="main-container" class="flex w-screen h-screen">

        <!-- SIDE PANEL -->
        <div class="flex flex-col w-screen h-screen space-y-6 bg-blue-100 md:w-80 lg:w-96 md:static">

            <!-- side panel chat/group selector -->
            <div class="flex flex-none w-full h-16 bg-blue-200 cursor-pointer">
                <div class="flex justify-center w-2/4 h-16 p-4 bg-blue-100 switch-tab" data-switch="chat">
                    <img id="chat-icon" src="img/icons/chat.svg" alt="chat" class="w-full opacity-100 switch-icon">
                </div>
                <div class="flex justify-center w-2/4 h-16 p-4 switch-tab" data-switch="groups">
                    <img id="groups-icon" src="img/icons/users.svg" alt="groups" class="w-full opacity-50 switch-icon">
                </div>
            </div>
            <!-- Chats Panel -->
            <div id="chat-side-panel" class="flex flex-col flex-auto pl-4 overflow-y-auto side-panel">
                <!-- chats panel title -->
                <div class="flex-none mr-6 h-36">
                    <div class="flex justify-between mb-4">
                        <h2 class="text-3xl">Chats</h2>
                    </div>
                    <input type="text" placeholder="Search users or messages" class="input">
                </div>
                <!-- chats panel items container -->
                <div id="chat-panel"
                    class="flex-auto pb-12 overflow-y-auto scrollbar-thin scrollbar-track-transparent scrollbar-thumb-blue-300">
                    <a href="#" class="panel-item">
                        <div
                            class="flex h-20 p-4 mr-6 transition rounded chat-panel-item active-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div style="background-image: url(img/users/user.png)"
                                    class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                                    <div class="absolute bottom-0 right-0 w-3 h-3 rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between flex-auto h-full truncate">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate"><b>1111Patrick Hendrix Lorem ipsum dolor
                                            sit amet
                                            consectetur, adipisicing elit. Nam, minus!</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">23:44</p>

                                </div>
                                <div>
                                    <p class="w-full text-xs text-gray-500 truncate"><span>You</span> : Lorem ipsum
                                        dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Delectus, odit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="panel-item">
                        <div class="flex h-20 p-4 mr-6 transition rounded chat-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div style="background-image: url(img/users/user.png)"
                                    class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                                    <div class="absolute bottom-0 right-0 w-3 h-3 rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between flex-auto h-full truncate">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate"><b>1111Patrick Hendrix Lorem ipsum dolor
                                            sit amet
                                            consectetur, adipisicing elit. Nam, minus!</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">23:44</p>

                                </div>
                                <div>
                                    <p class="w-full text-xs text-gray-500 truncate"><span>You</span> : Lorem ipsum
                                        dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Delectus, odit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="panel-item">
                        <div class="flex h-20 p-4 mr-6 transition rounded chat-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div style="background-image: url(img/users/user.png)"
                                    class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                                    <div class="absolute bottom-0 right-0 w-3 h-3 rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between flex-auto h-full truncate">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate"><b>1111Patrick Hendrix Lorem ipsum dolor
                                            sit amet
                                            consectetur, adipisicing elit. Nam, minus!</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">23:44</p>

                                </div>
                                <div>
                                    <p class="w-full text-xs text-gray-500 truncate"><span>You</span> : Lorem ipsum
                                        dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Delectus, odit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="panel-item">
                        <div class="flex h-20 p-4 mr-6 transition rounded chat-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div style="background-image: url(img/users/user.png)"
                                    class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                                    <div class="absolute bottom-0 right-0 w-3 h-3 rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between flex-auto h-full truncate">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate"><b>1111Patrick Hendrix Lorem ipsum dolor
                                            sit amet
                                            consectetur, adipisicing elit. Nam, minus!</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">23:44</p>

                                </div>
                                <div>
                                    <p class="w-full text-xs text-gray-500 truncate"><span>You</span> : Lorem ipsum
                                        dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Delectus, odit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="panel-item">
                        <div class="flex h-20 p-4 mr-6 transition rounded chat-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div style="background-image: url(img/users/user.png)"
                                    class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                                    <div class="absolute bottom-0 right-0 w-3 h-3 rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between flex-auto h-full truncate">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate"><b>1111Patrick Hendrix Lorem ipsum dolor
                                            sit amet
                                            consectetur, adipisicing elit. Nam, minus!</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">23:44</p>

                                </div>
                                <div>
                                    <p class="w-full text-xs text-gray-500 truncate"><span>You</span> : Lorem ipsum
                                        dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Delectus, odit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="panel-item">
                        <div class="flex h-20 p-4 mr-6 transition rounded chat-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div style="background-image: url(img/users/user.png)"
                                    class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                                    <div class="absolute bottom-0 right-0 w-3 h-3 rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between flex-auto h-full truncate">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate"><b>1111Patrick Hendrix Lorem ipsum dolor
                                            sit amet
                                            consectetur, adipisicing elit. Nam, minus!</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">23:44</p>

                                </div>
                                <div>
                                    <p class="w-full text-xs text-gray-500 truncate"><span>You</span> : Lorem ipsum
                                        dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Delectus, odit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="panel-item">
                        <div class="flex h-20 p-4 mr-6 transition rounded chat-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div style="background-image: url(img/users/user.png)"
                                    class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                                    <div class="absolute bottom-0 right-0 w-3 h-3 rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between flex-auto h-full truncate">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate"><b>1111Patrick Hendrix Lorem ipsum dolor
                                            sit amet
                                            consectetur, adipisicing elit. Nam, minus!</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">23:44</p>

                                </div>
                                <div>
                                    <p class="w-full text-xs text-gray-500 truncate"><span>You</span> : Lorem ipsum
                                        dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Delectus, odit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="panel-item">
                        <div class="flex h-20 p-4 mr-6 transition rounded chat-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div style="background-image: url(img/users/user.png)"
                                    class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                                    <div class="absolute bottom-0 right-0 w-3 h-3 rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between flex-auto h-full truncate">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate"><b>1111Patrick Hendrix Lorem ipsum dolor
                                            sit amet
                                            consectetur, adipisicing elit. Nam, minus!</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">23:44</p>

                                </div>
                                <div>
                                    <p class="w-full text-xs text-gray-500 truncate"><span>You</span> : Lorem ipsum
                                        dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Delectus, odit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="panel-item">
                        <div class="flex h-20 p-4 mr-6 transition rounded chat-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div style="background-image: url(img/users/user.png)"
                                    class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                                    <div class="absolute bottom-0 right-0 w-3 h-3 rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between flex-auto h-full truncate">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate"><b>1111Patrick Hendrix Lorem ipsum dolor
                                            sit amet
                                            consectetur, adipisicing elit. Nam, minus!</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">23:44</p>

                                </div>
                                <div>
                                    <p class="w-full text-xs text-gray-500 truncate"><span>You</span> : Lorem ipsum
                                        dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Delectus, odit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="panel-item">
                        <div class="flex h-20 p-4 mr-6 transition rounded chat-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div style="background-image: url(img/users/user.png)"
                                    class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                                    <div class="absolute bottom-0 right-0 w-3 h-3 rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between flex-auto h-full truncate">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate"><b>1111Patrick Hendrix Lorem ipsum dolor
                                            sit amet
                                            consectetur, adipisicing elit. Nam, minus!</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">23:44</p>

                                </div>
                                <div>
                                    <p class="w-full text-xs text-gray-500 truncate"><span>You</span> : Lorem ipsum
                                        dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Delectus, odit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- groups panel -->
            <div id="groups-side-panel" class="flex-col flex-auto hidden pl-4 overflow-y-auto side-panel">
                <!-- groups panel title -->
                <div class="flex-none mr-6 h-36">
                    <div class="flex justify-between mb-4">
                        <h2 class="text-3xl">Groups</h2>
                    </div>
                    <input type="text" placeholder="Search group" class="input">
                </div>
                <!-- groups panel items container -->
                <div id="groups-panel"
                    class="flex-auto pb-12 overflow-y-auto scrollbar-thin scrollbar-track-transparent scrollbar-thumb-blue-300">
                    <a href="#" class="panel-item">
                        <div
                            class="flex h-20 p-4 mr-6 transition rounded group-panel-item active-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div
                                    class="flex items-center justify-center flex-none w-12 h-12 mr-3 bg-yellow-400 rounded-full">
                                    <span class="inline-block text-2xl align-middle"><b>C</b></span>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between flex-auto h-full truncate">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate"><b>1111Patrick Hendrix Lorem ipsum dolor
                                            sit amet
                                            consectetur, adipisicing elit. Nam, minus!</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">23:44</p>

                                </div>
                                <div>
                                    <p class="w-full text-xs text-gray-500 truncate"><span>You</span> : Lorem ipsum
                                        dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Delectus, odit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="panel-item">
                        <div class="flex h-20 p-4 mr-6 transition rounded group-panel-item hover:bg-blue-300">
                            <div class="flex-none w-16">
                                <div
                                    class="flex items-center justify-center flex-none w-12 h-12 mr-3 bg-yellow-400 rounded-full">
                                    <span class="inline-block text-2xl align-middle"><b>C</b></span>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between flex-auto h-full truncate">
                                <div class="flex w-full max-w-full overflow-hidden truncate">
                                    <p class="flex-auto text-sm truncate"><b>1111Patrick Hendrix Lorem ipsum dolor
                                            sit amet
                                            consectetur, adipisicing elit. Nam, minus!</b>
                                    </p>
                                    <p class="flex-none float-right ml-2 text-xs text-gray-500">23:44</p>

                                </div>
                                <div>
                                    <p class="w-full text-xs text-gray-500 truncate"><span>You</span> : Lorem ipsum
                                        dolor sit amet Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Delectus, odit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- TEXT WINDOW -->
        <div id="text-window"
            class="absolute flex flex-col w-screen h-screen overflow-y-auto transition-transform duration-300 transform translate-x-full shadow-inner md:static md:translate-x-0 bg-gray-50">
            <!-- top bar -->
            <div class="flex items-center justify-between flex-none w-full px-6 py-4 border-b md:px-12">
                <div class="flex items-center">
                    <img src="img/icons/arrow-left.svg" alt="back" id="show-side-panel-arrow"
                        class="w-6 mr-4 cursor-pointer md:hidden">
                    <div style="background-image: url(img/users/user.png)"
                        class="relative w-12 h-12 mr-3 bg-center bg-cover rounded-full user-image">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-red-400 rounded-full"></div>
                    </div>
                    <p class="text-sm truncate"><b>Patrick Hendrix</b></p>
                </div>
                <div id="user-icon" class="relative">
                    <img src="img/icons/user.svg" alt="user"
                        class="w-6 transition opacity-50 cursor-pointer hover:opacity-100">
                    <div id="logout-div"
                        class="absolute right-0 z-50 hidden px-4 py-1 transition bg-white border border-gray-200 rounded cursor-pointer -bottom-12 hover:bg-gray-50">
                        <div class="flex items-center space-x-2 w-max">
                            <img src="img/icons/logout.svg" alt="logout" class="w-4">
                            <a href="php/logout.php"><span class="text-sm">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- chat window -->
            <div
                class="flex flex-col-reverse flex-auto gap-8 pb-16 pl-8 pr-10 overflow-y-auto bg-white shadow-inner md:pr-16 md:pl-14 scrollbar-thin scrollbar-track-blue-50 scrollbar-thumb-blue-300">
                <!-- chat items -->
                <div class="max-w-3/4 w-max">
                    <div class="relative self-start px-4 py-1 text-white rounded-lg bg-primary">
                        <p> 1 Hello Lorem ipsum dolor sit amet consectetur</p>
                        <div class="absolute p-1 bg-white rounded-full -left-6 -bottom-6">
                            <div style="background-image: url(img/users/user.png)"
                                class="w-8 h-8 bg-center bg-cover rounded-full ">
                            </div>

                        </div>
                    </div>
                    <p class="ml-5 text-xs text-gray-500">12:39 am</p>
                </div>
                <div class="self-end max-w-3/4 w-max">
                    <div class="relative px-4 py-1 bg-gray-100 rounded-lg">
                        <p>2 Hello again!</p>
                        <div class="absolute p-1 bg-white rounded-full -right-4 -bottom-4">
                            <div style="background-image: url(img/users/user.png)"
                                class="w-6 h-6 bg-center bg-cover rounded-full ">
                            </div>
                        </div>
                    </div>
                    <p class="mr-5 text-xs text-right text-gray-500">12:39 am</p>
                </div>
                <div class="relative self-start px-4 py-1 text-white bg-blue-600 max-w-3/4 rounded-xl">
                    3 Hello Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, debitis?! Lorem ipsum dolor
                    sit amet consectetur adipisicing elit.
                    <div class="absolute p-1 bg-white rounded-full -left-4 -bottom-4">
                        <div style="background-image: url(img/users/user.png)"
                            class="w-6 h-6 bg-center bg-cover rounded-full ">
                        </div>

                    </div>
                </div>
                <div class="relative self-end px-4 py-1 bg-gray-100 max-w-3/4 rounded-xl">
                    4 Hello again!
                    <div class="absolute p-1 bg-white rounded-full -right-4 -bottom-4">
                        <div style="background-image: url(img/users/user.png)"
                            class="w-6 h-6 bg-center bg-cover rounded-full ">
                        </div>
                    </div>
                </div>
                <div class="relative self-start px-4 py-1 text-white bg-blue-600 max-w-3/4 rounded-xl">
                    Hello Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, debitis?! Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Facere modi veritatis sed quas quis doloremque voluptates
                    dolore! Rerum, nesciunt harum.
                    <div class="absolute p-1 bg-white rounded-full -left-4 -bottom-4">
                        <div style="background-image: url(img/users/user.png)"
                            class="w-6 h-6 bg-center bg-cover rounded-full ">
                        </div>

                    </div>
                </div>
                <div class="relative self-end px-4 py-1 bg-gray-100 max-w-3/4 rounded-xl">
                    Hello again!
                    <div class="absolute p-1 bg-white rounded-full -right-4 -bottom-4">
                        <div style="background-image: url(img/users/user.png)"
                            class="w-6 h-6 bg-center bg-cover rounded-full ">
                        </div>
                    </div>
                </div>
                <div class="relative self-start px-4 py-1 text-white bg-blue-600 max-w-3/4 rounded-xl">
                    Hello Lorem ipsum dolor sit amet consectetur amodi veritatis sed quas quis doloremque voluptates
                    dolore! Rerum, nesciunt harum.
                    <div class="absolute p-1 bg-white rounded-full -left-4 -bottom-4">
                        <div style="background-image: url(img/users/user.png)"
                            class="w-6 h-6 bg-center bg-cover rounded-full ">
                        </div>

                    </div>
                </div>
                <div class="relative self-end px-4 py-1 bg-gray-100 max-w-3/4 rounded-xl">
                    Hello again!
                    <div class="absolute p-1 bg-white rounded-full -right-4 -bottom-4">
                        <div style="background-image: url(img/users/user.png)"
                            class="w-6 h-6 bg-center bg-cover rounded-full ">
                        </div>
                    </div>
                </div>
                <div class="relative self-start px-4 py-1 text-white bg-blue-600 max-w-3/4 rounded-xl">
                    Hello Lorem ipsum dolor sit amet
                    <div class="absolute p-1 bg-white rounded-full -left-4 -bottom-4">
                        <div style="background-image: url(img/users/user.png)"
                            class="w-6 h-6 bg-center bg-cover rounded-full ">
                        </div>

                    </div>
                </div>
                <div class="relative self-end px-4 py-1 bg-gray-100 max-w-3/4 rounded-xl">
                    Hello again!
                    <div class="absolute p-1 bg-white rounded-full -right-4 -bottom-4">
                        <div style="background-image: url(img/users/user.png)"
                            class="w-6 h-6 bg-center bg-cover rounded-full ">
                        </div>
                    </div>
                </div>
                <div class="relative self-start px-4 py-1 text-white bg-blue-600 max-w-3/4 rounded-xl">
                    Hello Lorem ipsum dolor sit amet c
                    <div class="absolute p-1 bg-white rounded-full -left-4 -bottom-4">
                        <div style="background-image: url(img/users/user.png)"
                            class="w-6 h-6 bg-center bg-cover rounded-full ">
                        </div>

                    </div>
                </div>
                <div class="relative self-end px-4 py-1 bg-gray-100 max-w-3/4 rounded-xl">
                    Hello again!
                    <div class="absolute p-1 bg-white rounded-full -right-4 -bottom-4">
                        <div style="background-image: url(img/users/user.png)"
                            class="w-6 h-6 bg-center bg-cover rounded-full ">
                        </div>
                    </div>
                </div>
            </div>
            <!-- bottom bar -->
            <div class="flex flex-none px-8 py-4 border-t md:px-12">
                <form action="" class="flex items-center w-full space-x-6">
                    <input id="send-message-input" type="text" class="input" placeholder="Enter message...">
                    <img id="emojis-btn" src="img/icons/emoji.svg" alt="emojis"
                        class="h-6 transition cursor-pointer hover:opacity-75">
                    <img id="send-message" src="img/icons/send.svg" alt="send message"
                        class="h-10 transition cursor-pointer active:opacity-75">
                </form>
            </div>
        </div>
    </div>

<?php include "php/footer.php"; ?>