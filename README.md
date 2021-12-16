Originally this repo was for the recipe cafe, but that is now another repo. This is for the grind converter part of it. This is to help **estimate** grind settings for various grinders to achieve similiar grind sizes.

# Grind Converter

The goal of this project is to get people drinking the best coffee of their lives. But how will software accomplish this? There are countless ways software may help, but there are a couple of fundamental aspects that this software will attempt to accomplish through various iterations.

## The Roadmap

The first step to the solution is to build tools that allow us to communicate about coffee grind sizes. What is the equivalent size of a Niche Zero's 50 on a Fellow Ode, that is, if there is one. How does roast level affect this? And how do unaccounted-for variables affect this? To figure this all out we must accomplish the following steps.

1. Create a grind-size converter. Do this by tracking the percentage of particles in each size produced by a given grinder and burr set. Take the "source" grinder's setting and finding the closest equivalent setting for the "destination" grinder.
2. Create a method for this data to be easily tracked. Allow the public to submit their own findings. Internally value the ratings of people with verified data more than people with unverified data.
3. Gather more and more and more data on as many grinders as possible.
4. Create a space for people to share their recipes, experiences, and love for coffee with one another with this converter baked in.

## Volatility

The first several versions of this project will include sweeping changes. This software will not be self-updating. In time, as functionality is added, a goal is to allow this software to be easily downloaded and used as a client / in offline mode with an update feature. For now, we must first create the proof of concept for this grind-size converter and start gathering limited data to test it. At that point, once the methodology is flushed out, the next step will be to determine the best software stack to complete this project with. This may mean a core language shift. But even without one, this will most certainly include a complete refactoring of the project.

## Credits

This project is the brainchild of myself, Marz Rover. If you use parts of this project, credit and a link back to the project would be amazing to help make this the best it can be. That being said, this project is MIT Licensed.
