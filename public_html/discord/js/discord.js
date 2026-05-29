/*global document, fetch, console */
"use strict";

document.addEventListener("DOMContentLoaded", function () {
    var discordWidget = document.getElementById("discordWidget");

    if (!discordWidget) {
        return;
    }

    fetch("./discord/ajax_discord.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8"
        },
        body: "lastmsg="
    })
        .then(function (response) {
            if (!response.ok) {
                throw new Error("Discord widget request failed");
            }

            return response.text();
        })
        .then(function (html) {
            discordWidget.insertAdjacentHTML("beforeend", html);
        })
        .catch(function (error) {
            console.error(error);
        });
});

