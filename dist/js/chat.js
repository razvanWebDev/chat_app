window.onload = () => {
  // Check if element exists before calling function
  const elementExists = (element) => {
    return element != undefined && element != null;
  };

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

  // switch between chat/groups=============
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

        // TODO switch chat window if needed
      });
    }
  };

  //   event listener
  if (elementExists(switchTabs)) {
    switchTabsOnClick();
  }

  //   ###############################################

  //   EMOJIS PICKER===================================
  const emojiPicker = new FgEmojiPicker({
    trigger: ["#emojis-btn"],
    removeOnSelection: false,
    closeButton: true,
    position: ["top", "left"],
    preFetch: true,
    insertInto: document.querySelector("#send-message-input"),
    emit(obj, triggerElement) {
      console.log(obj, triggerElement);
    },
  });

  // ##################################################
};
