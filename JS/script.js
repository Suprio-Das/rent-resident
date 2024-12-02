fetch("data.json")
  .then((res) => res.json())
  .then((data) => displayResult(data));

const displayResult = (members) => {
  const parentDiv = document.getElementById("team-container");
  for (const member of members) {
    const div = document.createElement();
  }
};
