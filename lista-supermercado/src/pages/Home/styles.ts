import styled from "styled-components";
import { Link } from "react-router-dom";

export const Loading = styled.div`
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 1;
`

export const NewTransactionCard = styled(Link)`
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    text-decoration: none;
    gap: 25px;
    border: 1px solid ${props => props.theme.COLORS.borderColor};
    padding: 30px;
    background-color: ${props => props.theme.COLORS.primaryBackgroundExtraLight};
    border-radius: 10px;
    cursor: pointer;
    transition: all .3s;

    &:hover {
        border-color: ${props => props.theme.COLORS.primary};
    }
`

export const NewTransactionCardLabel = styled.span`
    color: ${props => props.theme.COLORS.primary};
    font-size: ${props => props.theme.FONT_SIZES.lg};
    font-weight: 800;
`
