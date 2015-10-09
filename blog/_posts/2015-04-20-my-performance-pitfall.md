---
layout: post
title: My Performance Pitfall
---

The landscape of software performance, especially for UI, is covered with hidden ravines and traps. In short, it's easy to shoot yourself in the foot without being sure which foot you shot. This is the story of a dark hole that I found myself in that I believe others have been in too.

*Today, the developer created a list component.*

*She sought to consolidate and unify lists in her many apps, while sharing code. Her users would rejoice at the level of polish and consistency she'd achieved.*

*Being a responsible developer, she wants to ensure that lists were just as fast as they've ever been. But how do that? All the devices she owns are high-end. Things look great before and after her change. But wait! What if she wrote a test case the purposely stressed the system? Perhaps it tries to render 1,000 list items instead of the usual 40-50. She could measure the time it takes to render before and after her change. If the times match, things are great!*

*The test case is quick to create, but after the first three runs, things are far from great. It appears that the test takes far longer with her change. Frustratingly, each time she runs her test she gets different results. Sometimes differing by whole seconds.*

*After shutting down all her other running programs and killing any process that could be killed, she's able to clamp down on the variance a bit. But her change still seems to be slow. She spends hours hypothesizing and testing to find the culprit, but to no avail.*

This is a dismal hole. To get yourself out, you must learn three things:

* Time is not a magnifying glass
* Test on slow, cheap devices
* Use a performance analyzer

## Time is not a magnifying glass

It's easy to convince yourself that the same operation performed many times will simply make it easier to see and measure the problem. But as you scale, what about memory paging? Is the OS/Framework doing some optimizations present at large scale that don't exist at small scale? Or maybe the OS/Framework performs worse at scale.

You simply can't trust these results. Test real-world scenarios.

## Test on slow, cheap devices

This one sucks, because you have to buy something. Good thing it's cheap, right? While it's tempting to try and slow your machine down or use an emulator, if you really want to clamp down on test variance, buy the device.

## Use a performance analyzer

These tools are often hard to use and come with a steep learning curve, but trust me they're worth it. Instead of guessing at which part of your code is at fault, it will *tell* you.

*After absorbing these learnings, the developer was enlightened. The performance analyzer showed that a single API call in the constructor of each list item was at fault. Who'd have thunk it?*