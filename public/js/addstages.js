function addStage() {
    var stagesContainer = document.getElementById("stages-container");
    var newStage = document.createElement("div");
    newStage.className = "stage";
    var stageNumber = stagesContainer.children.length + 1;
    newStage.innerHTML = '<span>Stage ' + stageNumber + '</span>' +
                         '<input name="stages[]" placeholder="Enter stage here">' +
                         '<input name="contacts[]" placeholder="Enter contact to above stage here">' +
                         '<button type="button" class="delete-stage-btn" onclick="deleteStage(this)">Delete</button>';
    stagesContainer.appendChild(newStage);
}

function deleteStage(button) {
    var stageDiv = button.parentNode;
    stageDiv.parentNode.removeChild(stageDiv);
    var stagesContainer = document.getElementById("stages-container");
    var stageNumberSpans = stagesContainer.getElementsByTagName("span");
    for (var i = 0; i < stageNumberSpans.length; i++) {
        stageNumberSpans[i].innerHTML = "Stage " + (i + 1);
    }
}