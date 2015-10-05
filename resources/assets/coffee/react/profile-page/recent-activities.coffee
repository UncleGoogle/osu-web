el = React.createElement

class ProfilePage.RecentActivities extends React.Component
  _renderEntry: (event) =>
    # default, empty badge
    badge = el 'div', className: 'profile-extra-entries__icon'

    switch event.type
      when 'rank'
        badge = el 'div',
          className: "badge-rank badge-rank--#{event.scoreRank} profile-extra-entries__icon"

        text = el 'div',
          className: 'profile-extra-entries__text'
          dangerouslySetInnerHTML:
            __html: Lang.get 'events.rank',
              user: osu.link(event.user.url, event.user.username)
              rank: event.rank
              beatmap: osu.link(event.beatmap.url, event.beatmap.title)
              mode: Lang.get "common.play_mode.#{event.mode}"

      when 'rankLost'
        text = el 'div',
          className: 'profile-extra-entries__text'
          dangerouslySetInnerHTML:
            __html: Lang.get 'events.rankLost',
              user: osu.link(event.user.url, event.user.username)
              rank: event.rank
              beatmap: osu.link(event.beatmap.url, event.beatmap.title)
              mode: Lang.get "common.play_mode.#{event.mode}"

      when 'beatmapUpdate'
        text = el 'div',
          className: 'profile-extra-entries__text'
          dangerouslySetInnerHTML:
            __html: Lang.get 'events.beatmap_update',
              user: osu.link(event.user.url, event.user.username)
              beatmap: osu.link(event.beatmap.url, event.beatmap.title)

      when 'achievement'
        badge = el ProfilePage.AchievementBadge,
          achievement: event.achievement
          additionalClasses: 'profile-extra-entries__icon'

        text = el 'div',
          className: 'profile-extra-entries__text'
          dangerouslySetInnerHTML:
            __html: Lang.get 'events.achievement',
              user: osu.link(event.user.url, event.user.username)
              achievement: event.achievement.name

      when 'usernameChange'
        text = el 'div',
          className: 'profile-extra-entries__text'
          dangerouslySetInnerHTML:
            __html: Lang.get 'events.username_change',
              user: osu.link(event.user.url, event.user.username)
              previousUsername: event.user.previousUsername

      else
        return null

    el 'li',
      className: 'profile-extra-entries__item'
      key: event.id
      el 'div', className: 'profile-extra-entries__detail',
        badge
        text
      el 'div',
        className: 'profile-extra-entries__time'
        dangerouslySetInnerHTML: { __html: osu.timeago(event.createdAt) }


  render: =>
    el 'div',
      className: 'row-page profile-extra'
      el 'div', className: 'profile-extra__anchor js-profile-page-extra--scrollspy', id: 'recent_activities'
      el 'h2', className: 'profile-extra__title', Lang.get('users.show.extra.recent_activities.title')
      if @props.recentActivities.length
        el 'ul', className: 'profile-extra-entries',
          @props.recentActivities.map (activity) => @_renderEntry(activity)
      else
        el 'p', className: 'profile-extra-entries', Lang.get('events.empty')
