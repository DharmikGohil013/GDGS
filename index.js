{/* <script>
    // Sample games dataset
    const games = [
        { name: "Call of Duty", genre: "Shooter" },
        { name: "Fortnite", genre: "Battle Royale" },
        { name: "League of Legends", genre: "MOBA" },
        { name: "Minecraft", genre: "Sandbox" },
        { name: "Overwatch", genre: "Shooter" },
        { name: "Apex Legends", genre: "Battle Royale" },
        { name: "Valorant", genre: "Shooter" },
        { name: "PUBG", genre: "Battle Royale" },
        { name: "Assassin's Creed", genre: "Action-Adventure" },
        { name: "Cyberpunk 2077", genre: "RPG" },
        { name: "The Witcher 3", genre: "RPG" },
        { name: "DOTA 2", genre: "MOBA" }
        // You can extend this list with more games
    ];

    // Function to search and display game details
    function searchGames() {
        const input = document.getElementById('gameSearch').value.toLowerCase();
        const results = document.getElementById('searchResults');
        
        // Clear previous results
        results.innerHTML = '';

        // Filter games based on input
        const filteredGames = games.filter(game => game.name.toLowerCase().includes(input));

        if (filteredGames.length > 0) {
            filteredGames.forEach(game => {
                const gameItem = `<li>${game.name} (${game.genre})</li>`;
                results.innerHTML += gameItem;
            });
        } else {
            results.innerHTML = '<li>No games found</li>';
        }
    }
</script> */}
