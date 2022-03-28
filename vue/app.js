let app = Vue.createApp({
    data() {
        return {
            albums: [
                {
            title: "Liquid swords",
                artist: "GZA"
        },
        {
            title: "Operations Doomsday",
                artist: "MF Doom"
        },
        {
            title: "Blazing Arrow",
                artist: "Blacklicious"
        },
        ],
};
    },
methods: {
    addAlbum() {
        this.albums.push({ title: 'Untitled', artist: 'Untitled' })
    }
},
    });

app.mount("#app-root");