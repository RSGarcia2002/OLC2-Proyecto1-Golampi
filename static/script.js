const codeArea = document.getElementById("code");
const consoleArea = document.getElementById("console");
const consoleLines = document.getElementById("consoleLines");
const fileInput = document.getElementById("fileInput");
const editorLines = document.getElementById("editorLines");

const btnNew = document.getElementById("btnNew");
const btnSave = document.getElementById("btnSave");
const btnClearConsole = document.getElementById("btnClearConsole");
const btnDownloadOutput = document.getElementById("btnDownloadOutput");
const btnDownloadErrors = document.getElementById("btnDownloadErrors");
const btnDownloadSymbols = document.getElementById("btnDownloadSymbols");

btnNew.addEventListener("click", () => {
    codeArea.value = "";
    renderConsole("");
    renderEditorLines();
    codeArea.focus();
});

btnClearConsole.addEventListener("click", () => {
    renderConsole("");
});

fileInput.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = (e) => {
        codeArea.value = e.target.result;
        renderEditorLines();
    };
    reader.readAsText(file);
});

btnSave.addEventListener("click", () => {
    const blob = new Blob([codeArea.value], { type: "text/plain" });
    const link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = "codigo_golampi.go";
    link.click();
    URL.revokeObjectURL(link.href);
});

btnDownloadOutput.addEventListener("click", () => {
    const blob = new Blob([consoleArea.textContent], { type: "text/plain" });
    const link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = "resultado.txt";
    link.click();
    URL.revokeObjectURL(link.href);
});

btnDownloadErrors.addEventListener("click", () => {
    const content = JSON.stringify(window.__ERRORS__ || [], null, 2);
    const blob = new Blob([content], { type: "application/json" });
    const link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = "errores.json";
    link.click();
    URL.revokeObjectURL(link.href);
});

btnDownloadSymbols.addEventListener("click", () => {
    const content = JSON.stringify(window.__SYMBOLS__ || [], null, 2);
    const blob = new Blob([content], { type: "application/json" });
    const link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = "tabla_simbolos.json";
    link.click();
    URL.revokeObjectURL(link.href);
});

document.addEventListener("keydown", (event) => {
    if (event.ctrlKey && event.key === "Enter") {
        event.preventDefault();
        document.getElementById("runForm").submit();
    }
});

function renderConsole(content) {
    consoleArea.textContent = content || "";

    const totalLines = Math.max(1, (content || "").split("\n").length);
    let lines = "";

    for (let i = 1; i <= totalLines; i++) {
        lines += i + "\n";
    }

    consoleLines.textContent = lines;
}

function renderEditorLines() {
    const content = codeArea.value || "";
    const totalLines = Math.max(1, content.split("\n").length);

    let lines = "";
    for (let i = 1; i <= totalLines; i++) {
        lines += i + "\n";
    }

    editorLines.textContent = lines;
}

codeArea.addEventListener("input", renderEditorLines);

codeArea.addEventListener("scroll", () => {
    editorLines.scrollTop = codeArea.scrollTop;
});

renderEditorLines();
renderConsole(window.__OUTPUT__ || "");