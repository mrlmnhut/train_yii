﻿/*
 Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
CKEDITOR.plugins.setLang("a11yhelp", "id", {
    title: "Instruksi Accessibility",
    contents: "Bantuan. Tekan ESC untuk menutup dialog ini.",
    legend: [{
        name: "Umum",
        items: [{
            name: "Toolbar Editor",
            legend: "Tekan ${toolbarFocus} untuk berpindah ke toolbar. Untuk berpindah ke group toolbar selanjutnya dan sebelumnya gunakan TAB dan SHIFT+TAB. Untuk berpindah ke tombol toolbar selanjutnya dan sebelumnya gunakan RIGHT ARROW atau LEFT ARROW. Tekan SPASI atau ENTER untuk mengaktifkan tombol toolbar."
        }, {
            name: "Dialog Editor",
            legend: "Pada jendela dialog, tekan TAB untuk berpindah pada elemen dialog selanjutnya, tekan SHIFT+TAB untuk berpindah pada elemen dialog sebelumnya, tekan ENTER untuk submit dialog, tekan ESC untuk membatalkan dialog. Pada dialog dengan multi tab, daftar tab dapat diakses dengan ALT+F10 ataupun dengan tombol TAB sesuai urutan tab pada dialog. Jika daftar tab aktif terpilih, untuk berpindah tab dapat menggunakan RIGHT dan LEFT ARROW."
        }, {
            name: "Context Menu Editor",
            legend: "Press ${contextMenu} or APPLICATION KEY to open context-menu. Then move to next menu option with TAB or DOWN ARROW. Move to previous option with SHIFT+TAB or UP ARROW. Press SPACE or ENTER to select the menu option. Open sub-menu of current option with SPACE or ENTER or RIGHT ARROW. Go back to parent menu item with ESC or LEFT ARROW. Close context menu with ESC."
        },
            {
                name: "List Box Editor",
                legend: "Inside a list-box, move to next list item with TAB OR DOWN ARROW. Move to previous list item with SHIFT+TAB or UP ARROW. Press SPACE or ENTER to select the list option. Press ESC to close the list-box."
            }, {
                name: "Editor Element Path Bar",
                legend: "Press ${elementsPathFocus} to navigate to the elements path bar. Move to next element button with TAB or RIGHT ARROW. Move to previous button with SHIFT+TAB or LEFT ARROW. Press SPACE or ENTER to select the element in editor."
            }]
    },
        {
            name: "Commands",
            items: [{
                name: " Undo command",
                legend: "Press ${undo}"
            }, {
                name: " Redo command",
                legend: "Press ${redo}"
            }, {
                name: " Bold command",
                legend: "Press ${bold}"
            }, {
                name: " Italic command",
                legend: "Press ${italic}"
            }, {
                name: " Underline command",
                legend: "Press ${underline}"
            }, {
                name: " Link command",
                legend: "Press ${link}"
            }, {
                name: " Toolbar Collapse command",
                legend: "Press ${toolbarCollapse}"
            }, {
                name: " Access previous focus space command",
                legend: "Press ${accessPreviousSpace} to access the closest unreachable focus space before the caret, for example: two adjacent HR elements. Repeat the key combination to reach distant focus spaces."
            },
                {
                    name: " Access next focus space command",
                    legend: "Press ${accessNextSpace} to access the closest unreachable focus space after the caret, for example: two adjacent HR elements. Repeat the key combination to reach distant focus spaces."
                }, {
                    name: " Accessibility Help",
                    legend: "Press ${a11yHelp}"
                }, {
                    name: " Paste as plain text",
                    legend: "Press ${pastetext}",
                    legendEdge: "Press ${pastetext}, followed by ${paste}"
                }]
        }],
    tab: "Tab",
    pause: "Pause",
    capslock: "Caps Lock",
    escape: "Escape",
    pageUp: "Page Up",
    pageDown: "Page Down",
    leftArrow: "Left Arrow",
    upArrow: "Up Arrow",
    rightArrow: "Right Arrow",
    downArrow: "Down Arrow",
    insert: "Insert",
    leftWindowKey: "Left Windows key",
    rightWindowKey: "Right Windows key",
    selectKey: "Select key",
    numpad0: "Numpad 0",
    numpad1: "Numpad 1",
    numpad2: "Numpad 2",
    numpad3: "Numpad 3",
    numpad4: "Numpad 4",
    numpad5: "Numpad 5",
    numpad6: "Numpad 6",
    numpad7: "Numpad 7",
    numpad8: "Numpad 8",
    numpad9: "Numpad 9",
    multiply: "Multiply",
    add: "Add",
    subtract: "Subtract",
    decimalPoint: "Decimal Point",
    divide: "Divide",
    f1: "F1",
    f2: "F2",
    f3: "F3",
    f4: "F4",
    f5: "F5",
    f6: "F6",
    f7: "F7",
    f8: "F8",
    f9: "F9",
    f10: "F10",
    f11: "F11",
    f12: "F12",
    numLock: "Num Lock",
    scrollLock: "Scroll Lock",
    semiColon: "Semicolon",
    equalSign: "Equal Sign",
    comma: "Comma",
    dash: "Dash",
    period: "Period",
    forwardSlash: "Forward Slash",
    graveAccent: "Grave Accent",
    openBracket: "Open Bracket",
    backSlash: "Backslash",
    closeBracket: "Close Bracket",
    singleQuote: "Single Quote"
});