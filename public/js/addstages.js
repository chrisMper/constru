
    const addStageBtn = document.getElementById('add-stage-btn');
const stagesContainer = document.getElementById('stages-container');

let stageCount = 1;

addStageBtn.addEventListener('click', () => {
    stageCount++;

    const stageDiv = document.createElement('div');
    stageDiv.classList.add('stage');

    const stageInput = document.createElement('input');
    stageInput.id = `stage${stageCount}`;
    stageInput.name = `stage${stageCount}`;
    stageInput.placeholder = `Enter stage ${stageCount} here`;
    stageDiv.appendChild(stageInput);

    const contactPersonLabel = document.createElement('p');
    contactPersonLabel.innerText = 'Contact person';
    stageDiv.appendChild(contactPersonLabel);

    const contactPersonInput = document.createElement('input');
    contactPersonInput.id = `contact_person${stageCount}`;
    contactPersonInput.name = `contact_person${stageCount}`;
    contactPersonInput.placeholder = '07x xxxxxxx';
    stageDiv.appendChild(contactPersonInput);

    stagesContainer.appendChild(stageDiv);
}); 
