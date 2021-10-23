window.onload = () => {
  const chatPanelList = document.querySelector("#chat-panel-list");

  //populate chat panel list
  setInterval(() => {
    let xhr = new XMLHttpRequest(); //create XML object
    xhr.open("GET", "php/members.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.response;
          chatPanelList.innerHTML = data;
        }
      }
    };
    xhr.send();
  }, 1000);
};
