//==============================
// Shared Code Panel Switcher
//==============================
const codeExamples = document.querySelectorAll('[data-code-example]');

// Set up each example separately so its buttons only affect its own panels.
codeExamples.forEach((example) => {
    const sourceButtons = example.querySelectorAll('[data-code-view]');
    const sourcePanels = example.querySelectorAll('[data-code-panel]');
    const sourceTitle = example.querySelector('[data-code-title]');

    // Examples with one code panel do not need a switcher.
    if (!sourceButtons.length || !sourcePanels.length || !sourceTitle) {
        return;
    }

    function switchCodeView(selectedButton) {
        const codeView = selectedButton.dataset.codeView;
        const selectedPanel = example.querySelector(`[data-code-panel="${codeView}"]`);

        if (!selectedPanel) {
            return;
        }

        sourcePanels.forEach((panel) => {
            panel.hidden = panel !== selectedPanel;
        });

        sourceButtons.forEach((button) => {
            button.setAttribute('aria-pressed', String(button === selectedButton));
        });

        // Each button supplies its filename through the HTML.
        sourceTitle.textContent = selectedButton.dataset.codeFilename;
    }

    sourceButtons.forEach((button) => {
        button.addEventListener('click', () => {
            switchCodeView(button);
        });
    });

    const initialButton = example.querySelector('[data-code-view][aria-pressed="true"]') || sourceButtons[0];
    switchCodeView(initialButton);
});