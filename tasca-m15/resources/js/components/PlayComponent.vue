<template>
    <div>
        <h1 v-if="success">You win!</h1>
        <h1 v-else>You lose :(</h1>
        <p>Dice #1: <span><strong>{{ game.dice1 }}</strong></span></p>
        <p>Dice #2: <span><strong>{{ game.dice2 }}</strong></span></p>
    </div>
</template>