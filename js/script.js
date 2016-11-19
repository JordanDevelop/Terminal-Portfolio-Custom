/*** LICENSE
 *
 * Copyright (c) 2013 Adam Onishi
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software,
 * and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions
 * of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
 * TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 **/
/* , "education", "about", "skills", "blog", "interests", "design"], */
var sectionsArray = ["blog", "contact", "portfolio"],
    pastCommands = [],
    commandLine = document.querySelector('#command-line .commands'),
    visibleSection = document.getElementById('visible-sections'),
    commandIndex = 0,
    twilio_start = false;
$(document).keyup(function(ev) {
    if (ev.keyCode == 27) $(".cmd-modal").trigger("click");
});

function keyPressHandler(e) {
    var code = (e.keyCode) ? e.keyCode : e.charCode;
    if (e.metaKey || e.ctrlKey || e.altKey) return;
    e.preventDefault();
    commandIndex--;
    switch (code) {
        case 27:
            break;
        case 8:
            backspaceKey();
            break;
        case 13:
            enterKey();
            break;
        case 32:
            addCharSpace();
            break;
        case 187:
        case 61:
            addCharPlusEquals(e);
            break;
        case 189:
        case 109:
        case 173:
            addCharDash();
            break;
        case 38:
            upArrowKey();
            break;
        case 40:
            commandIndex += 2;
            downArrowKey();
            break;
        default:
            if (e.shiftKey) return;
            letterKey(code);
            break
    }
}
document.addEventListener("keydown", keyPressHandler);

function enterKey() {
    var command = commandLine.innerText || commandLine.textContent;
    // Store in past commands array
    pastCommands.push(command);
    // Add the completed command to the content section
    var completed = document.createElement('div');
    completed.classList.add('completed-command');
    completed.innerHTML = document.getElementById('command-line').innerHTML.replace('<textarea id="commands" class="commands">', '<div class="output">');
    visibleSection.appendChild(completed);
    // Work out what command is running
    var sp = '\u00A0';
    switch (command) {

        case 'everything':
            appendSection('sections');
            break;
        case 'help':
            appendSection(command);
            break;
        case 'blog':
            appendSection(command);
            break;
        case 'blog' + sp + '-n':
            appendSection('blog-new');
            break;
        case 'blog' + sp + '-l':
            appendSection('blog-latest');
            break;
        case 'clear':
            clearSection();
            break;
        default:
            if (sectionsArray.indexOf(command) >= 0) {
                appendSection(command);
            } else {
                appendSection('error');
            }
            break;
    }
    commandLine.innerHTML = '';
}

function appendSection(section) {
    var newContent = document.createElement('div');
    newContent.innerHTML = document.getElementById(section).innerHTML;
    visibleSection.appendChild(newContent);
    commandLine.scrollIntoView(true);
    $('.container').scrollTop($('.container')[0].scrollHeight);
}

function clearSection(section) {
    var newContent = document.createElement('div');
    newContent.innerHTML = document.getElementById("visible-sections").innerHTML = "";
}

function backspaceKey() {
    var str = commandLine.innerHTML;
    str = str.substring(0, str.length - 1);
    if (str.slice(-5) === '&nbsp') {
        str = str.substring(0, str.length - 5);
    }
    commandLine.innerHTML = str;
}

function letterKey(code) {
    var c = '';
    if ((code > 47 && code < 58) || (code > 95 && code < 106)) {
        // Top numbers
        c = code - 48;
        // Keypad numbers
        if (c > 9) {
            c = c - 48;
        }
    } else {
        // Letters
        code = code + 32;
        c = String.fromCharCode(code);
    }
    commandLine.innerHTML += c;
}

function addCharSpace() {
    commandLine.innerHTML += '&nbsp;';
}

function addCharDash() {
    commandLine.innerHTML += '-';
}

function addCharPlusEquals(e) {
    if (e.shiftKey) {
        commandLine.innerHTML += '+';
    } else {
        commandLine.innerHTML += '=';
    }
}

function upArrowKey() {
    if (commandIndex < 0) {
        commandIndex = pastCommands.length - 1;
    }
    commandLine.innerHTML = pastCommands[commandIndex] + '';
}

function downArrowKey() {
    // Get next command
    if (commandIndex >= pastCommands.length) {
        commandLine.innerHTML = '';
    } else {
        commandLine.innerHTML = pastCommands[commandIndex] + '';
    }
}
