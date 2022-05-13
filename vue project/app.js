let app = Vue.createApp(
    {
        data() {
            return {
                // variabler här

                games: [
                    {
                        name: "Elden Ring",
                        company: "FromSoftware INC",
                        rating: "10/10",
                        release: "2022",
                        img: "./images/elden ring.webp",
                        link: "./eldenring.html",
                    },
                    {
                        name: "Valorant",
                        company: "Riot Games",
                        rating: "9/10",
                        release: "2020",
                        img: "./images/Valorant.jpg",
                        link: "./valorant.html",
                    },
                    {
                        name: "Counter:Strike",
                        company: "Valve",
                        rating: "6/10",
                        release: "2012",
                        img: "./images/counter strike.jpg",
                        link: "./counterstrike.html",
                    },
                    {
                        name: "Destiny 2",
                        company: "Bungiee",
                        rating: "8/10",
                        release: "2017",
                        img: "./images/destiny2.jpg",
                        link: "./destiny2.html",
                    },
                    {
                        name: "Apex Legends",
                        company: "Electronic Arts",
                        rating: "8/10",
                        release: "2019",
                        img: "./images/apex legends.jpg",
                        link: "./apexlegends.html",
                    },

                ]
            }
        },
        methods: {
            // funktioner här
        }
    }
);

app.mount("#app-root");