window.onload = () => {
  // Check if element exists before calling function
  const elementExists = (element) => {
    return element != undefined && element != null;
  };
  // ============ASYNC======================================
  const chatPanelList = document.querySelector("#chat-panel-list");
  let refreshChatPanelList = true;

  //populate chat panel list
  const displayMembers = () => {
    let xhr = new XMLHttpRequest(); //create XML object
    xhr.open("GET", "php/display_members.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          if (refreshChatPanelList) {
            chatPanelList.innerHTML = data;
          }
        }
      }
    };
    xhr.send();
  };
  displayMembers();
  // setInterval(() => {
  //   displayMembers();
  // }, 3000);

  // ######################################################

  //search members=============
  const searchMembersBar = document.querySelector("#search-members");
  const searchMembers = () => {
    searchMembersBar.onkeyup = () => {
      let searchTerm = searchMembersBar.value;
      refreshChatPanelList = searchTerm == "";
      let xhr = new XMLHttpRequest(); //create XML object
      xhr.open("POST", "php/search_members.php", true);
      xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            let data = xhr.response;
            chatPanelList.innerHTML = data;
          }
        }
      };
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.send("searchTerm=" + searchTerm);
    };
  };
  // cancel search members
  const cancelSearchMembersBtn = document.querySelector(
    "#cancel-search-members-btn"
  );
  const cancelSearchMembers = () => {
    cancelSearchMembersBtn.onclick = () => {
      searchMembersBar.value = "";
      displayMembers();
      refreshChatPanelList = true;
    };
  };
  if (elementExists(searchMembersBar)) {
    searchMembers();
    cancelSearchMembers();
  }
  // **********************************************************
  // CHAT WINDOW======================================
  // send chat
  const chatBox = document.querySelector("#chat-box");
  const chatBoxContainer = document.querySelector("#chat-box-container");
  const sendForm = document.querySelector("#send-form");
  const sendInput = document.querySelector("#send-input");
  const sendBtn = document.querySelector("#send-btn");

  sendForm.onsubmit = (e) => {
    e.preventDefault();
  };
  const sendMessage = () => {
    sendBtn.onclick = () => {
      let xhr = new XMLHttpRequest(); //create XML object
      xhr.open("POST", "php/insert_chat.php", true);
      xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            sendInput.value = "";
            getMessages();
            scrollChatToBottom();
          }
        }
      };
      let formData = new FormData(sendForm);
      xhr.send(formData);
    };
  };
  if (elementExists(sendBtn)) {
    sendMessage();
  }

  // get chat
  const getMessages = () => {
    let xhr = new XMLHttpRequest(); //create XML object
    xhr.open("POST", "php/get_chat.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          chatBox.innerHTML = data;
        }
      }
    };
    let formData = new FormData(sendForm);
    xhr.send(formData);
  };
  //get messages on load
  getMessages();
  //get messages @ interval
  // setInterval(() => {
  //   getMessages();
  // }, 500);

  // **************************************************
  function scrollChatToBottom() {
    console.log(chatBoxContainer.scrollHeight);
    chatBoxContainer.scrollTop = chatBoxContainer.scrollHeight;
  }
  scrollChatToBottom();

  //   logout============================
  const userIcon = document.getElementById("user-icon");
  const logoutDiv = document.getElementById("logout-div");

  //show logout div
  if (elementExists(userIcon)) {
    userIcon.addEventListener("click", () => {
      logoutDiv.classList.remove("hidden");
    });
  }

  //hide logout div
  if (elementExists(logoutDiv)) {
    window.addEventListener("click", function (e) {
      if (!logoutDiv.contains(e.target) && !userIcon.contains(e.target)) {
        logoutDiv.classList.add("hidden");
      }
    });
  }
  // #################################

  // switch between chat/groups=============;
  const switchTabs = document.querySelectorAll(".switch-tab");
  const switchIcons = document.querySelectorAll(".switch-icon");

  const sidePanels = document.querySelectorAll(".side-panel");

  const switchTabsOnClick = () => {
    for (const switchTab of switchTabs) {
      switchTab.addEventListener("click", () => {
        switchTabs.forEach((tab) => {
          tab.classList.remove("bg-blue-100");
        });
        switchTab.classList.add("bg-blue-100");
        const currentTab = switchTab.getAttribute("data-switch");
        // set current icon
        switchIcons.forEach((switchIcon) => {
          switchIcon.classList.remove("opacity-100");
          switchIcon.classList.add("opacity-50");
        });
        const currentSwitchIcon = document.getElementById(`${currentTab}-icon`);
        currentSwitchIcon.classList.add("opacity-100");

        // set current panel
        sidePanels.forEach((sidePanel) => {
          sidePanel.classList.add("hidden");
        });
        const currentsidePanel = document.getElementById(
          `${currentTab}-side-panel`
        );
        currentsidePanel.classList.remove("hidden");
      });
    }
  };
  if (elementExists(switchTabs)) {
    switchTabsOnClick();
  }

  // Set current panel item======================
  const chatPanelItems = document.querySelectorAll(".chat-panel-item");
  const groupPanelItems = document.querySelectorAll(".group-panel-item");

  const setCurrentPaneItem = (items) => {
    items.forEach((item) => {
      item.addEventListener("click", () => {
        console.log("click");
        items.forEach((item) => item.classList.remove("active-panel-item"));
        item.classList.add("active-panel-item");
      });
    });
  };
  if (elementExists(chatPanelItems)) {
    setCurrentPaneItem(chatPanelItems);
  }
  if (elementExists(groupPanelItems)) {
    setCurrentPaneItem(groupPanelItems);
  }

  // Show-hide side panel on mobile===============
  const panelItems = document.querySelectorAll(".panel-item");

  const showSidePanelArrow = document.querySelector("#show-side-panel-arrow");
  const textWindow = document.querySelector("#text-window");

  const hideTextWindow = () => {
    showSidePanelArrow.addEventListener("click", () => {
      textWindow.classList.add("translate-x-full");
    });
  };

  const showTextWindow = () => {
    panelItems.forEach((item) => {
      console.log("panelItemssssssssssssssssssssssssssssssss ", panelItems);
      item.addEventListener("click", () => {
        console.log("clickuuuuuuuuuuuuuuuuuuuuuuuuu");
        textWindow.classList.remove("translate-x-full");
      });
    });
  };

  //   event listeners
  if (elementExists(showSidePanelArrow)) {
    hideTextWindow();
  }
  if (elementExists(panelItems)) {
    showTextWindow();
  }

  //   ###############################################

  //   EMOJIS PICKER===================================
  const emojiPicker = new FgEmojiPicker({
    trigger: ["#emojis-btn"],
    removeOnSelection: false,
    closeButton: true,
    position: ["top", "left"],
    preFetch: true,
    insertInto: sendInput,
    emit(obj, triggerElement) {
      console.log(obj, triggerElement);
    },
  });

  // ##################################################
  // Change file input===============================
  const fileInputs = document.querySelectorAll(".chose-image-input");

  const changeFileInputs = () => {
    fileInputs.forEach((input) => {
      input.addEventListener("change", () => {
        const spanToBeRenamed =
          input.parentNode.querySelector(".select-image-span");
        if (input.files.length > 0) {
          spanToBeRenamed.innerHTML = input.files[0].name;
          input.parentElement.classList.add("bg-green-200");
        } else {
          spanToBeRenamed.innerHTML = "Select Image";
          input.parentElement.classList.remove("bg-green-200");
        }
      });
    });
  };
  if (elementExists(fileInputs)) {
    changeFileInputs();
  }
  // *********************************************
};
