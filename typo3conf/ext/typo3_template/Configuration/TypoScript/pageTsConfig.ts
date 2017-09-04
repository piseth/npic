#################
#### TCEMAIN ####
#################
TCEMAIN {
    clearCacheCmd = all
}
# Page TSConfig:
tx_gridelements.setup {
    # ID of Element
    1 {
        title = Two Columns
        config {
            colCount = 2
            rowCount = 1
            rows {
                1 {
                    columns {
                        1 {
                                name = Left
                                colPos = 1
                        }
                        2 {
                                name = Right
                                colPos = 2
                        }
                    }
                }
            }
        }
        #icon = EXT:nxbase/ext_icon.gif

        flexformDS (
                <T3DataStructure>
                        <meta>
                                <langDisable>1</langDisable>
                        </meta>
                        <ROOT type="array">
                                <type>array</type>
                                <el type="array">
                                <columnType type="array">
                                        <TCEforms type="array">
                                        <label>Column Type</label>
                                        <config type="array">
                                                <type>select</type>
                                                <items type="array">
                                                <numIndex index="0" type="array">
                                                        <numIndex index="0">1:1</numIndex>
                                                        <numIndex index="1">cols-1-1</numIndex>
                                                </numIndex>
                                                <numIndex index="1" type="array">
                                                        <numIndex index="0">1:2</numIndex>
                                                        <numIndex index="1">cols-1-2</numIndex>
                                                </numIndex>
                                                <numIndex index="2" type="array">
                                                        <numIndex index="0">2:1</numIndex>
                                                        <numIndex index="1">cols-2-1</numIndex>
                                                </numIndex>
                                                <numIndex index="3" type="array">
                                                        <numIndex index="0">1:3</numIndex>
                                                        <numIndex index="1">cols-1-3</numIndex>
                                                </numIndex>
                                                <numIndex index="4" type="array">
                                                        <numIndex index="0">3:1</numIndex>
                                                        <numIndex index="1">cols-3-1</numIndex>
                                                </numIndex>
                                                </items>
                                        </config>
                                        </TCEforms>
                                </columnType>
                                </el>
                        </ROOT>
                </T3DataStructure>
        )
    }
    2 {
        title = Three Columns
        config {
            colCount = 3
            rowCount = 1
            rows {
                1 {
                    columns {
                        1 {
                                name = Left
                                colPos = 1
                        }
                        2 {
                                name = Middle
                                colPos = 2
                        }
                        3 {
                                name = Right
                                colPos = 3
                        }
                    }
                }
            }
        }
    }
}

# add new frame to content element
TCEFORM.tt_content.section_frame {
  disabled = 0
  removeItems = 1,5,6,10,11,12,20,21,66
  addItems.101 = Leading style
  addItems.102 = Visible mobile
  addItems.103 = Hidden mobile
}

# RTE config adding class lead to span p and div
RTE {
    default {
        # link to site css stylesheet
        contentCSS = typo3conf/ext/typo3_template/Resources/Public/css/rte-backend.css

        buttons {
            textstyle.tags.span.allowedClasses := addToList(lead)
        }
 
        # list all available classes here, otherwise they're removed on RTE save
        proc.allowedClasses := addToList(lead)
    }
}

# adding news layout for latest news
tx_news.templateLayouts {
    101 = Latest news
}