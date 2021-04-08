# Cryptocurrency-AI-trade
# Introduction

  AI is gradually becoming prevalent and profitable these years. It starts from a human-computer competition on March 2016, a deep reinforcement learning algorithm, beat the world champion Lee Sedol at the Game of Go. This game made a big splash and enlightened the prospect of AI-related industries.
  
  Investment strategy is essentially a kind of game of maximizing the benefit. Just like ‘the Game of Go’ mentioned above, computer does better than even the best human player. Therefore, utilizing AI algorithms in the investment strategy game, let computers make well-reckoned decisions rather than human effort, could not only save time and effort but also make more profit.

# Our Goal

Obtain, analyze and process previous stock data from yahoo finance API (raw data).
Build a reinforcement learning framework and use cleaned data to train model.
Predict future trend of stock price movement and show profitable buying and selling point
Build a back test system and test with practical trade scenarios with pre-trained model.
Build an UI to visualize the trading system and enable trade simulation.

The project flow chart is as follows:

![image](https://user-images.githubusercontent.com/77420718/114036852-0081b300-98b3-11eb-9ad2-0e983da0b27d.png)

# Literature Survey and References

Each day during the trading session, take the main contracts that are most likely to move up or down significantly in the next few days and place a long or short position on them. Obviously, there are some RL algorithm available, however, Previous work has mainly focused on observing trade returns without considering trading cost and slippage. Trading cost and slippage are crucial in real-life trading strategy. So, in our project we will take those into account. 

In finance, an investment strategy is a set of rules, behaviors or procedures, designed to guide an investor‘s selection of an investment portfolio. Individuals have different profit objectives, and their individual skills make different tactics and strategies appropriate. Most choices involve a tradeoff between risk and return. Some investors fall somewhere in between, accepting some risk for the expectation of higher returns.

References: 

1.Hongyang Yang, Xiao-Yang Liu, Shan Zhong, and Anwar Walid. 2020. Deep Reinforcement Learning for Automated Stock Trading: An Ensemble Strategy. In ICAIF ’20: ACM International Conference on AI in Finance, Oct. 15–16, 2020, Manhattan, NY. ACM, New York, NY, USA.

2.KAYALAR, F. (2018). RESEARCH INTO THE IMPACT OF MOBILE LEARNING ENVIRONMENT ON STUDENTS' MOOD AND ACADEMIC ACHIEVEMENTS. International Journal of Social Humanities Sciences Research (JSHSR), 5(27), 2778-2886. doi:10.26450/jshsr.673

# Methodology

Involved Algorithms:

Deep reinforcement learning - approximates the Q value with a neural network. 

Bellman Equation and Markov decision process (MDP)

PPO (proximal policy optimization algorithm) - Actor-only approach (policy gradient)

The Deep reinforcement learning framework is illustrated as follows:

![image](https://user-images.githubusercontent.com/77420718/114042187-cbc42a80-98b7-11eb-8f4c-7f4c4957d409.png)

# Simulation and Final delivery

Simulation on training BTCUSD datasets gets following outputs:

![image](https://user-images.githubusercontent.com/77420718/114051419-a804e280-98bf-11eb-8dd8-b25b41060cf7.png)

Test with btcusd data from January 2020 - February 2021

![image](https://user-images.githubusercontent.com/77420718/114051863-1053c400-98c0-11eb-8685-26f6f07dfad2.png)

The annual return ratio is 29 percent

The maximum draw down is 11 percent

Sharpe ratio is 2.12

The final delivery is to obtain detailed data and trade strategy and an data visualize UI, shown as follows:

![image](https://user-images.githubusercontent.com/77420718/114046948-d7b1eb80-98bb-11eb-94f8-eceee9059f8b.png)

